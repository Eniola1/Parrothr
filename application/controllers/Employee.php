<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// include_once (dirname(__FILE__) . "/Notification.php");
// include APPPATH . 'controllers/Notification.php';

class Employee extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('dashboard_model');
        $this->load->model('employee_model');
        $this->load->model('login_model');
        $this->load->model('payroll_model');
        $this->load->model('settings_model');
        $this->load->model('leave_model');
        $this->load->model('organization_model');  
        $this->load->library('notification');

    }
    
	public function index()
	{
		if ($this->session->userdata('user_login_access') != 1)
            redirect(base_url() . 'login', 'refresh');
        if ($this->session->userdata('user_login_access') == 1)
          
        redirect('employee/Employees');
	}
    
    public function Employees(){
        if($this->session->userdata('user_login_access') != False and $this->session->userdata('user_type') == "ADMIN") { 

            $data['employee'] = $this->employee_model->emselect();
            // var_dump($data['employee']);exit;
            $data['organization'] = $this->organization_model;
            $this->load->view('backend/employees',$data);
        }
        else{
            redirect(base_url() , 'refresh');
        }        
    }

    

    public function Confidentiality(){
        if($this->session->userdata('user_login_access') != False) { 
            $data['employee'] = $this->employee_model->emselect();
            $this->load->view('confidentiality',$data);
        }
        else{
            redirect(base_url() , 'refresh');
        }        
    }

    public function Add_employee(){
        if($this->session->userdata('user_login_access') != False) { 
            $data['departments'] = $this->organization_model->depselect();
            $data['designations'] = $this->organization_model->desselect();
            $data['branches'] = $this->organization_model->branchSelect();
            $this->load->view('backend/add_employee', $data);
        }
        else{
            redirect(base_url() , 'refresh');
        }            
    }

    public function createEmployee(){ 
        if($this->session->userdata('user_login_access') != False) { 
            // Get all input fields and XSS validation
            $data = $this->input->post(NULL, TRUE);   
            // create employee ID 
            $data['em_id'] = $this->createEmployeeID($data['last_name']);
            
            // check if email exists
            if($this->employee_model->Does_email_exists($data['em_email'])){
                echo "Email already exists";
            }else {
                // create password
                $pass = strtolower($data['first_name']).strtolower($data['last_name']).rand(100,999);
                $data['em_password'] = sha1($pass);
                                
                // Add employee
                $this->employee_model->Add($data);
                
                // Notify employee
                // $this->notification->sendNewUserNotification([$data['em_id']], 'Welcome to ParrotHR', $pass);

                echo "Employee Added, login details have been sent to employee"; 
                                 
            }

        }
        else{
            redirect(base_url() , 'refresh');
        }        
    }

    /**Create employee ID and ensure there are no duplicates */
    function createEmployeeID($emID){
        $unique = false;
        while(!$unique){
            $check = substr($emID,0,3).rand(10,3000); 
            $data = $this->employee_model->emselectByID($check);

            if($data){
                continue;
            }else{
                $unique = true;
            }
        }
        return $check;
    } 

	public function importEmployees(){
		$this->load->library('csvimport');
		$file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
		$duplicates = array();
		//echo $file_data;
		foreach ($file_data as $row){
            
			if(!isset($row["users_email"]) || !isset($row['phone_number']) || !isset($row['users_firstname']) || !isset($row['users_lastname'])){
                echo 'All fields are required to be filled';exit;
			}
			else {
                $email = $row["users_email"];
				$duplicate = $this->employee_model->Does_email_exists($email);
				if(!empty($duplicate)){
                    array_push($duplicates, $email);
                    continue;
				} else { 
                    $fname = $row["users_firstname"];
                    $lname = $row["users_lastname"];
                    $emrand = $this->createEmployeeID($lname);   
                    $contact = "0".$row["phone_number"];
                    $email = $row["users_email"];
                    $password = sha1($contact);	
                    
                    $this->load->library('form_validation');
                    $this->form_validation->set_error_delimiters();
                    // Validating Name Field
                    $this->form_validation->set_rules('contact', 'contact', 'trim|required|length[10]|xss_clean');
                    /*validating email field*/
                    $this->form_validation->set_rules('email', 'Email','trim|required|min_length[7]|max_length[100]|xss_clean');
                    $data = array();
                    $data = array(
                        'em_id' => $emrand,
                        'first_name' => $fname,
                        'last_name' => $lname,
                        'em_email' => $email,
                        'em_password'=>$password,
                        'em_phone'=>$contact,
                    );
                    // print_r($data); exit;
                    $this->employee_model->Add($data);
				}		

			}
			// echo count($data); exit;
			// echo "successfully Updated"; 
		}
        if (count($duplicates) == count($file_data)) {
            echo "All records exist";
        }else{
            echo "Done Successfully";
        }
	}

	public function Update(){
        if($this->session->userdata('user_login_access') != False) {  
            // all input fields from form with xss validation
            $data = $this->input->post(NUll, TRUE);

            // user ID
            $em_id = $this->input->post('em_id');    
        
            // ID photo
            $id_file_name='id_for_'.$em_id;

            // file upload config
            $config = array(
                'file_name' => $id_file_name,
                'upload_path' => "./assets/images/users/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite' => False,
                'max_size' => "20240000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "800",
                'max_width' => "800"
            );

            // file upload for user ID
            if ($_FILES['em_id_image']['name']) {
                // set config file name and initialize
                $config['file_name'] = $id_file_name;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                // check if file exists
                $checkImage = $this->employee_model->emselectByID($em_id);
                $checkImage = "./assets/images/users/$checkImage->em_id_image";
                if(file_exists($checkImage)){
                    // delete file
                    unlink($checkImage);
                    // upload new file
                    if ( !$this->upload->do_upload('em_id_image')){
                        // show error if it fails
                        echo $this->upload->display_errors();
                        exit;
                    }
                    // get uploaded file name
                    $path = $this->upload->data();
                    $id_file_name = $path['file_name'];
                    $data['em_id_image'] = $id_file_name;
                }else{
                    // upload file
                    if ( !$this->upload->do_upload('em_id_image')){
                        // show error if it fails
                        echo $this->upload->display_errors();
                        exit;
                    }
                    // get uploaded file name
                    $path = $this->upload->data();
                    $id_file_name = $path['file_name'];
                    $data['em_id_image'] = $id_file_name;
                }
            }

            // file upload for user image
            if ($_FILES['em_image']['name']) {
                // set config file name and initialize
                $config['file_name'] = $em_id;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                // check if file exists
                $checkImage = $this->employee_model->emselectByID($em_id);
                $checkImage = "./assets/images/users/$checkImage->em_image";
                if(file_exists($checkImage)){
                    // delete file
                    unlink($checkImage);
                    // upload new file
                    if ( !$this->upload->do_upload('em_image')){
                        // show error if it fails
                        echo $this->upload->display_errors();
                        exit;
                    }
                    // get uploaded file name
                    $path = $this->upload->data();
                    $em_image = $path['file_name'];
                    $data['em_image'] = $em_image;
                }else{
                    // upload file
                    if ( !$this->upload->do_upload('em_image')){
                        // show error if it fails
                        echo $this->upload->display_errors();
                        exit;
                    }
                    // get uploaded file name
                    $path = $this->upload->data();
                    $em_image = $path['file_name'];
                    $data['em_image'] = $em_image;
                }
            }
            
            // update user
            $this->employee_model->Update($data,$em_id); 
            echo "Successfully Updated";

            // Notify Employee
            // $this->notification->sendNotification($em_id, 'Profile Update', 'employee/view?id='.$em_id);
        }
        else{
            redirect(base_url() , 'refresh');
        }        
    }

    public function view(){
        if($this->session->userdata('user_login_access') != False) {
        $id = $this->input->get('id');
        $data['famBackground'] = $this->employee_model->famBackground($id);
        $data['empDetails'] = $this->employee_model->empdetails($id);
        $data['profMembership'] = $this->employee_model->profMembership($id);
        $data['training'] = $this->employee_model->training($id);
        $data['skills'] = $this->employee_model->skills($id);
        $data['history'] = $this->employee_model->history($id);
        $data['referees'] = $this->employee_model->referees($id);
        $data['undertaking'] = $this->employee_model->undertaking($id);
        $data['basic'] = $this->employee_model->GetBasic($id);
        $data['departments'] = $this->organization_model->depselect();
        $data['designations'] = $this->organization_model->desselect();
        $data['branches'] = $this->organization_model->branchSelect();
        $data['permanent'] = $this->employee_model->GetperAddress($id);
        $data['present'] = $this->employee_model->GetpreAddress($id);
        $data['education'] = $this->employee_model->GetEducation($id);
        $data['experience'] = $this->employee_model->GetExperience($id);
        $data['bankinfo'] = $this->employee_model->GetBankInfo($id);
        $data['fileinfo'] = $this->employee_model->GetFileInfo($id);
        $data['typevalue'] = $this->payroll_model->GetsalaryType();
        $data['leavetypes'] = $this->leave_model->GetleavetypeInfo();    
        $data['salaryvalue'] = $this->employee_model->GetsalaryValue($id);
        $data['family'] = $this->employee_model->idselect($id);
        $year = date('Y');
        $data['Leaveinfo'] = $this->employee_model->GetLeaveiNfo($id,$year);
        $this->load->view('backend/employee_view',$data);
        }
        else{
            redirect(base_url() , 'refresh');
        }         
    }

    public function deleteEmployee(){
        $id = $this->input->post('id');
        $this->employee_model->deleteEmployee($id);

        // // save admin sessionID
        // $adminSessId = session_id();
        // // get user sessionID
        // $userSessId = $this->settings_model->getsessionId($id);
        // if ($userSessId) {
        //     // set user session ID as current sessionID and remove user session data
        //     session_id($userSessId);
        //     // destroy the user session
        //     var_dump($this->session->userdata());exit;
        //     $this->session->set_userdata('user_login_access', '1');
        // }
        // // set admins sessionID
        // session_id($adminSessId);

        echo "Deleted successfully";
    }

    public function PolicyDocuments()
    {
        if ($this->session->userdata('user_login_access') != False) {
            $this->load->view('backend/user/PolicyDocuments');
        } else {
            redirect(base_url(), 'refresh');
        }
    }
    public function OnboardingForms()
    {
        if ($this->session->userdata('user_login_access') != False) {
            $this->load->view('backend/user/OnboardingForms');
        } else {
            redirect(base_url(), 'refresh');
        }
    }
    public function EmployeeForms()
    {
        if ($this->session->userdata('user_login_access') != False) {
            $this->load->view('backend/user/EmployeeForms');
        } else {
            redirect(base_url(), 'refresh');
        }
    }

    public function employeeOfTheMonth(){
        if($this->session->userdata('user_login_access') != False and $this->session->userdata('user_type') == "ADMIN") { 
            $data['employee'] = $this->employee_model->getEmployeeOfTheMonth();
            // $data['branches'] = $this->organization_model->branchSelect();
            $this->load->view('backend/employeeOfTheMonth', $data);
        }else{
            redirect(base_url() , 'refresh');
        }
    }
    
    public function employeeOfTheMonthReport(){
        if($this->session->userdata('user_login_access') != False and $this->session->userdata('user_type') == "ADMIN") { 
            $data['employee'] = $this->employee_model->getEmployeeOfTheMonthReport();
            // $data['branches'] = $this->organization_model->branchSelect();
            $this->load->view('backend/employeeOfTheMonthReport', $data);
        }else{
            redirect(base_url() , 'refresh');
        }
    }
    
    public function employeeOfTheMonthForm(){
        if($this->session->userdata('user_login_access') != False and $this->session->userdata('user_type') == "ADMIN") { 
            $data['employees'] = $this->employee_model->emselect();
            $data['branches'] = $this->organization_model->branchSelect();
            $this->load->view('backend/employeeOfTheMonthForm', $data);
        }else{
            redirect(base_url() , 'refresh');
        }
    }
    
    public function addEmployeeOfTheMonth(){
        if($this->session->userdata('user_login_access') != False and $this->session->userdata('user_type') == "ADMIN") { 
            $data = $this->input->post(NULL, TRUE);
            $id = $this->input->post('id');
            if(empty($id)){
                $this->employee_model->addEmployeeOfTheMonth($data);
                 echo "Added Successfully";
             } else {
                 $this->employee_model->Update_Desciplinary($id,$data);
                 echo "Successfully Updated";
             }
        }else{
            redirect(base_url() , 'refresh');
        }
    }

    public function familyDetails(){
        if($this->session->userdata('user_login_access') != False) {

        $em_id = $this->input->post('uid');
        
        // $query = $this->db->query('SELECT * FROM family where em_id = '.$em_id.'');
        // echo $query->num_rows();

        $fathersFirstName = $this->input->post('fathersFirstName');
        $fathersMiddleName = $this->input->post('fathersMiddleName');
        $fathersLastName = $this->input->post('fathersLastName');
        $mothersFirstName = $this->input->post('mothersFirstName');
        $mothersMiddleName = $this->input->post('mothersMiddleName');
        $mothersLastName = $this->input->post('mothersLastName');
        $maritalStatus = $this->input->post('maritalStatus');
        $spousesFirstName = $this->input->post('spousesFirstName');
        $spousesMiddleName = $this->input->post('spousesMiddleName');
        $spousesLastName = $this->input->post('spousesLastName');
        $spousesEmployment = $this->input->post('spousesEmployment');
        $spousesEmployer = $this->input->post('spousesEmployer');
        $spousesWorkAddress = $this->input->post('spousesWorkAddress');
        $relativeInCompany = $this->input->post('relativeInCompany');
        $nameOfRelation = $this->input->post('nameOfRelation');
        $natureOfRelation = $this->input->post('natureOfRelation');
        $postionOfRelation = $this->input->post('postionOfRelation');
        $nextOfKinFirstName = $this->input->post('nextOfKinFirstName');
        $nextOfKinLastName = $this->input->post('nextOfKinLastName');
        $nextOfKinRelationship = $this->input->post('nextOfKinRelationship');
        $emergencyFullName = $this->input->post('emergencyFullName');
        $emergencyRelationship = $this->input->post('emergencyRelationship');
        $emergencyPhone = $this->input->post('emergencyPhone');
        $dependantFirstName1 = $this->input->post('dependantFirstName1');
        $dependantLastName1 = $this->input->post('dependantLastName1');
        $dependantRelationship1 = $this->input->post('dependantRelationship1');
        $dobForDependant1 = $this->input->post('dobForDependant1');
        $dependantFirstName2 = $this->input->post('dependantFirstName2');
        $dependantLastName2 = $this->input->post('dependantLastName2');
        $dependantRelationship2 = $this->input->post('dependantRelationship2');
        $dobForDependant2 = $this->input->post('dobForDependant2');
        $dependantFirstName3 = $this->input->post('dependantFirstName3');
        $dependantLastName3 = $this->input->post('dependantLastName3');
        $dependantRelationship3 = $this->input->post('dependantRelationship3');
        $dobForDependant3 = $this->input->post('dobForDependant3');
        
        // //validate properly;

        $data = array(  
            'em_id' => $em_id,
            'fathersFirstName' => $fathersFirstName,  
            'fathersMiddleName' => $fathersMiddleName,  
            'fathersLastName' => $fathersLastName,
            'mothersFirstName' => $mothersFirstName,
            'mothersMiddleName' => $mothersMiddleName,  
            'mothersLastName' => $mothersLastName,  
            'maritalStatus' => $maritalStatus,
            'spousesFirstName' => $spousesFirstName,
            'spousesMiddleName' => $spousesMiddleName,  
            'spousesLastName' => $spousesLastName,  
            'spousesEmployment' => $spousesEmployment,
            'spousesEmployer' => $spousesEmployer,
            'spousesWorkAddress' => $spousesWorkAddress,  
            'relativeInCompany' => $relativeInCompany,  
            'nameOfRelation'=> $nameOfRelation,
            'natureOfRelation'=> $natureOfRelation,
            'postionOfRelation'=> $postionOfRelation,
            'nextOfKinFirstName'=> $nextOfKinFirstName,  
            'nextOfKinLastName'=> $nextOfKinLastName,  
            'nextOfKinRelationship' => $nextOfKinRelationship,
            'emergencyFullName'=> $emergencyFullName,
            'emergencyRelationship' => $emergencyRelationship,  
            'emergencyPhone' => $emergencyPhone,  
            'dependantFirstName1' => $dependantFirstName1,
            'dependantLastName1' => $dependantLastName1,
            'dependantRelationship1'=> $dependantRelationship1,  
            'dobForDependant1'=> $dobForDependant1,  
            'dependantFirstName2'=> $dependantFirstName2,
            'dependantLastName2' => $dependantLastName2,
            'dependantRelationship2'=> $dependantRelationship2,  
            'dobForDependant2'=> $dobForDependant2,  
            'dependantFirstName3' => $dependantFirstName3,
            'dependantLastName3' => $dependantLastName3,
            'dependantRelationship3' => $dependantRelationship3,
            'dobForDependant3' => $dobForDependant3,    
            );  


            $this->db->select('*');
            $this->db->from('family');
            $this->db->where('em_id', $em_id);
            $query = $this->db->get();
            $query = $query->num_rows();

            if($query == 0)
            {
                $this->db->insert('family',$data);
                echo "Successfully Added";
            } 

            else
            {
                $this->db->where('em_id', $em_id);
                $this->db->update('family',$data);
                echo "updated successfully";
            }
        }         
    }

    public function employmentDetails(){
        if($this->session->userdata('user_login_access') != False) {

        $em_id = $this->input->post('uid');
        $dOfJoining = $this->input->post('dOfJoining');
        $duration = $this->input->post('duration');
        $division = $this->input->post('division');
        $jobTitle = $this->input->post('jobTitle');
        $reportsTo = $this->input->post('reportsTo');
        
        //validate properly;

        $data = array(  
            'em_id' => $em_id,
            'dateOfJoining' => $dOfJoining,
            'durationOfContract' => $duration,
            'division' => $division,
            'jobTitle' => $jobTitle,
            'reportsTo' => $reportsTo,
            );  


            $this->db->select('*');
            $this->db->from('employeedetails');
            $this->db->where('em_id', $em_id);
            $query = $this->db->get();
            $query = $query->num_rows();

            if($query == 0)
            {
                $this->db->insert('employeedetails',$data);
                echo "Successfully Added";
            } 

            else
            {
                $this->db->where('em_id', $em_id);
                $this->db->update('employeedetails',$data);
                echo "updated successfully";
            }
        }         
    }

    public function profMembership(){
        if($this->session->userdata('user_login_access') != False) {

        $em_id = $this->input->post('uid');
        $association1 = $this->input->post('association1');
        $membershipType1 = $this->input->post('membershipType1');
        $fee1 = $this->input->post('fee1');
        $association2 = $this->input->post('association2');
        $membershipType2 = $this->input->post('membershipType2');
        $fee2 = $this->input->post('fee2');
        $association3 = $this->input->post('association3');
        $membershipType3 = $this->input->post('membershipType3');
        $fee3 = $this->input->post('fee3');

        //validate properly;

        $data = array(  
            'em_id' => $em_id,
            'Association' => $association1,
            'membershipType' => $membershipType1,
            'annualFee' => $fee1,
            'association1' => $association2,
            'extraMembType1' => $membershipType2,
            'extrafee1' => $fee2,
            'association2' => $association3,
            'exraMembType2' => $membershipType3,
            'extrafee2' => $fee3,
            );  


            $this->db->select('*');
            $this->db->from('profmembership');
            $this->db->where('em_id', $em_id);
            $query = $this->db->get();
            $query = $query->num_rows();

            if($query == 0)
            {
                $this->db->insert('profmembership',$data);
                echo "Successfully Added";
            } 

            else
            {
                $this->db->where('em_id', $em_id);
                $this->db->update('profmembership',$data);
                echo "updated successfully";
            }
        }         
    }

    public function training(){
        if($this->session->userdata('user_login_access') != False) {

        $em_id = $this->input->post('uid');
        $date1 = $this->input->post('date1');
        $course1 = $this->input->post('course1');
        $duration1 = $this->input->post('duration1');
        $date2 = $this->input->post('date2');
        $course2 = $this->input->post('course2');
        $duration2 = $this->input->post('duration2');
        $date3 = $this->input->post('date3');
        $course3 = $this->input->post('course3');
        $duration3 = $this->input->post('duration3');

        //validate properly;

        $data = array(  
            'em_id' => $em_id,
            'date' => $date1,
            'course' => $course1,
            'duration' => $duration1,
            'date1' => $date2,
            'course1' => $course2,
            'duration1' => $duration2,
            'date2' => $date3,
            'course2' => $course3,
            'duration2' => $duration3,
            );  


            $this->db->select('*');
            $this->db->from('training');
            $this->db->where('em_id', $em_id);
            $query = $this->db->get();
            $query = $query->num_rows();

            if($query == 0)
            {
                $this->db->insert('training',$data);
                echo "Successfully Added";
            } 

            else
            {
                $this->db->where('em_id', $em_id);
                $this->db->update('training',$data);
                echo "updated successfully";
            }
        }         
    }

    public function skills(){
        if($this->session->userdata('user_login_access') != False) {

        $em_id = $this->input->post('uid');
        $skill1 = $this->input->post('skill1');
        $competency1 = $this->input->post('competency1');
        $application1 = $this->input->post('application1');
        $skill2 = $this->input->post('skill2');
        $competency2 = $this->input->post('competency2');
        $application2 = $this->input->post('application2');
        $skill3 = $this->input->post('skill3');
        $competency3 = $this->input->post('competency3');
        $application3 = $this->input->post('application3');

        //validate properly;

        $data = array(  
            'em_id' => $em_id,
            'skill1' => $skill1,
            'competency1' => $competency1,
            'application1' => $application1,
            'skill2' => $skill2,
            'competency2' => $competency2,
            'application2' => $application2,
            'skill3' => $skill3,
            'competency3' => $competency3,
            'application3' => $application3,
            );  

            $this->db->select('*');
            $this->db->from('skills');
            $this->db->where('em_id', $em_id);
            $query = $this->db->get();
            $query = $query->num_rows();

            if($query == 0)
            {
                $this->db->insert('skills',$data);
                echo "Successfully Added";
            } 

            else
            {
                $this->db->where('em_id', $em_id);
                $this->db->update('skills',$data);
                echo "updated successfully";
            }
        }         
    }

    public function history(){
        if($this->session->userdata('user_login_access') != False) {

        $em_id = $this->input->post('uid');
        $from1 = $this->input->post('from1');
        $to1 = $this->input->post('to1');
        $name1 = $this->input->post('name1');
        $position1 = $this->input->post('position1');
        $reason1 = $this->input->post('reason1');
        $from2 = $this->input->post('from2');
        $to2 = $this->input->post('to2');
        $name2 = $this->input->post('name2');
        $position2 = $this->input->post('position2');
        $reason2 = $this->input->post('reason2');
        $from3 = $this->input->post('from3');
        $to3 = $this->input->post('to3');
        $name3 = $this->input->post('name3');
        $position3 = $this->input->post('position3');
        $reason3 = $this->input->post('reason3');

        //validate properly;

        $data = array(  
            'em_id' => $em_id,
            'from1' => $from1,
            'to1' =>$to1,
            'companyName' => $name1,
            'lastPosition' => $position1,
            'leavingReason' => $reason1,
            'from2' => $from2,
            'to2' => $to2,
            'companyName2' => $name2,
            'lastPosition2' => $position2,
            'leavingReason2' => $reason2,
            'from3' => $from3,
            'to3' => $to3,
            'companyName3' => $name3,
            'lastPosition3' => $position3,
            'leavingReason3' => $reason3,
            );  


            $this->db->select('*');
            $this->db->from('employment');
            $this->db->where('em_id', $em_id);
            $query = $this->db->get();
            $query = $query->num_rows();

            if($query == 0)
            {
                $this->db->insert('employment',$data);
                echo "Successfully Added";
            } 

            else
            {
                $this->db->where('em_id', $em_id);
                $this->db->update('employment',$data);
                echo "updated successfully";
            }
        }         
    }

    public function referee(){
        if($this->session->userdata('user_login_access') != False) {

        $em_id = $this->input->post('uid');
        $name1 = $this->input->post('name1');
        $address1 = $this->input->post('address1');
        $number1 = $this->input->post('number1');
        $relationship1 = $this->input->post('relationship1');
        $name2 = $this->input->post('name2');
        $address2 = $this->input->post('address2');
        $number2 = $this->input->post('number2');
        $relationship2 = $this->input->post('relationship2');
        $name3 = $this->input->post('name3');
        $address3 = $this->input->post('address3');
        $number3 = $this->input->post('number3');
        $relationship3 = $this->input->post('relationship3');

        //validate properly;

        $data = array(
            'em_id' => $em_id,  
            'name1' => $name1,
            'address1' => $address1,
            'phone1' =>$number1,
            'relationship1' => $relationship1,
            'name2' => $name2,
            'address2' => $address2,
            'number2' => $number2,
            'relationship2' => $relationship2,
            'name3' => $name3,
            'address3' => $address3,
            'number3' => $number3,
            'relationship3' => $relationship3,
            );  


            $this->db->select('*');
            $this->db->from('referees');
            $this->db->where('em_id', $em_id);
            $query = $this->db->get();
            $query = $query->num_rows();

            if($query == 0)
            {
                $this->db->insert('referees',$data);
                echo "Successfully Added";
            } 

            else
            {
                $this->db->where('em_id', $em_id);
                $this->db->update('referees',$data);
                echo "updated successfully";
            }
        }         
    }

    public function undertaking(){
        if($this->session->userdata('user_login_access') != False) {

        $em_id = $this->input->post('uid');
        $status = $this->input->post('status');
        
        //validate properly;

        $data = array(
            'em_id' => $em_id,
            'status' => $status,  
            );  

            $this->db->select('*');
            $this->db->from('undertaking');
            $this->db->where('em_id', $em_id);
            $query = $this->db->get();
            $query = $query->num_rows();

            if($query == 0)
            {
                $this->db->insert('undertaking',$data);
                echo "Successfully Added";
            } 

            else
            {
                $this->db->where('em_id', $em_id);
                $this->db->update('undertaking',$data);
                echo "updated successfully";
            }
        }         
    }

    public function Present_Address(){
        if($this->session->userdata('user_login_access') != False) {
        $id = $this->input->post('id');
        $em_id = $this->input->post('emid');
        $presaddress = $this->input->post('presaddress');
        $prescity = $this->input->post('prescity');
        $prescountry = $this->input->post('prescountry');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters();
        $this->form_validation->set_rules('presaddress', 'address', 'trim|required|min_length[5]|max_length[100]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
			#redirect("employee/view?I=" .base64_encode($em_id));
			} else {
            $data = array();
                $data = array(
                    'emp_id' => $em_id,
                    'city' => $prescity,
                    'country' => $prescountry,
                    'address' => $presaddress,
                    'type' => 'Present'
                );
            if(empty($id)){
                $success = $this->employee_model->AddParmanent_Address($data);
                $this->session->set_flashdata('feedback','Successfully Added');
                echo "Successfully Updated";
            } else {
                $success = $this->employee_model->UpdateParmanent_Address($id,$data);
                $this->session->set_flashdata('feedback','Successfully Updated');
                echo "Successfully Added";
            }
                       
        }
        }
        else{
            redirect(base_url() , 'refresh');
        }        
    }

    public function Add_Education(){
        if($this->session->userdata('user_login_access') != False) {
        $id = $this->input->post('id');
        $em_id = $this->input->post('emid');
        $certificate = $this->input->post('name');
        $institute = $this->input->post('institute');
        $eduresult = $this->input->post('result');
        $eduyear = $this->input->post('year');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters();
        $this->form_validation->set_rules('name', 'name', 'trim|required|min_length[2]|max_length[150]|xss_clean');
        $this->form_validation->set_rules('institute', 'institute', 'trim|required|min_length[5]|max_length[250]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
			#redirect("employee/view?I=" .base64_encode($em_id));
			} else {
            $data = array();
                $data = array(
                    'emp_id' => $em_id,
                    'edu_type' => $certificate,
                    'institute' => $institute,
                    'result' => $eduresult,
                    'year' => $eduyear
                );
            if(empty($id)){
                $success = $this->employee_model->Add_education($data);
                $this->session->set_flashdata('feedback','Successfully Added');
                echo "Successfully Added";
            } else {
                $success = $this->employee_model->Update_Education($id,$data);
                #$this->session->set_flashdata('feedback','Successfully Updated');
                echo "Successfully Updated";
            }
                       
        }
        }
        else{
            redirect(base_url() , 'refresh');
        }            
    }

    public function Save_Social(){
        if($this->session->userdata('user_login_access') != False) {
        $id = $this->input->post('id');
        $em_id = $this->input->post('emid');
        $facebook = $this->input->post('facebook');
        $twitter = $this->input->post('twitter');
        $google = $this->input->post('google');
        $skype = $this->input->post('skype');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters();
        $this->form_validation->set_rules('facebook', 'company_name', 'trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
			} else {
            $data = array();
                $data = array(
                    'emp_id' => $em_id,
                    'facebook' => $facebook,
                    'twitter' => $twitter,
                    'google_plus' => $google,
                    'skype_id' => $skype
                );
            if(empty($id)){
                $success = $this->employee_model->Insert_Media($data);
                echo "Successfully Added";
            } else {
                $success = $this->employee_model->Update_Media($id,$data);
                echo "Successfully Updated";
            }
                       
        }
        }
        else{
            redirect(base_url() , 'refresh');
        }        
    }

    public function Add_Experience(){
        if($this->session->userdata('user_login_access') != False) {
        $id = $this->input->post('id');
        $em_id = $this->input->post('emid');
        $company = $this->input->post('company_name');
        $position = $this->input->post('position_name');
        $address = $this->input->post('address');
        $start = $this->input->post('work_duration');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters();
        $this->form_validation->set_rules('company_name', 'company_name', 'trim|required|min_length[5]|max_length[150]|xss_clean');
        $this->form_validation->set_rules('position_name', 'position_name', 'trim|required|min_length[5]|max_length[250]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
			#redirect("employee/view?I=" .base64_encode($em_id));
			} else {
            $data = array();
                $data = array(
                    'emp_id' => $em_id,
                    'exp_company' => $company,
                    'exp_com_position' => $position,
                    'exp_com_address' => $address,
                    'exp_workduration' => $start
                );
            if(empty($id)){
                $success = $this->employee_model->Add_Experience($data);
                $this->session->set_flashdata('feedback','Successfully Added');
                echo "Successfully Updated";
            } else {
                $success = $this->employee_model->Update_Experience($id,$data);
                #$this->session->set_flashdata('feedback','Successfully Updated');
                echo "Successfully Updated";
            }
                       
        }
        }
        else{
            redirect(base_url() , 'refresh');
        }        
    }

    public function Disciplinary(){
        if($this->session->userdata('user_login_access') != False) {
            $data['desciplinary'] = $this->employee_model->desciplinaryfetch();
            $data['allemployees'] = $this->employee_model->emselect();
            $this->load->view('backend/disciplinary',$data); 
        }
        else{
            redirect(base_url() , 'refresh');
        }            
    }
   
    public function disciplinaryAction(){
        if($this->session->userdata('user_login_access') != False) {
            $data['desciplinary'] = $this->employee_model->desciplinaryfetch();
            $data['allemployees'] = $this->employee_model->emselect();
            $this->load->view('backend/disciplinaryAction',$data); 
        }
        else{
            redirect(base_url() , 'refresh');
        }            
    }
   
    public function disciplinary_report(){
        if($this->session->userdata('user_login_access') != False) {
            $data['desciplinary'] = $this->employee_model->desciplinaryReport();
            $data['allemployees'] = $this->employee_model->emselect();
            $this->load->view('backend/disciplinaryReport',$data); 
        }
        else{
            redirect(base_url() , 'refresh');
        }            
    }

    public function add_Desciplinary(){
        if($this->session->userdata('user_login_access') != False) {
            $id = $this->input->post('id');
            $data = $this->input->post(NULL, TRUE);

            if(empty($id)){
               $this->employee_model->Add_Desciplinary($data);

                echo "Successfully Added";
                // Send Notification
            } else {
                $this->employee_model->Update_Desciplinary($id,$data);
                echo "Successfully Updated";
            }
                        
        }
        else{
            redirect(base_url() , 'refresh');
        }        
    }

    public function Queries(){
        if ($this->session->userdata('user_login_access') != False) {
            $id = $this->session->userdata('user_login_id');
            $data['queries'] = $this->employee_model->GetDisciplinary($id);
            $data['allemployees'] = $this->employee_model->emselect();
            $this->load->view('backend/queries',$data);
        }else{
            redirect(base_url() , 'refresh');
        }    
    }
    
    public function Employee_Requests(){
        if ($this->session->userdata('user_login_access') != False) {
            $data['requests'] = $this->employee_model->GetEmployeeRequests();
            $this->load->view('backend/employee_requests',$data);
        }else{
            redirect(base_url() , 'refresh');
        }    
    }

    public function requestReport(){
        if ($this->session->userdata('user_login_access') != False) {
            $data['requests'] = $this->employee_model->GetEmployeeRequestsReport();
            $this->load->view('backend/requestReport',$data);
        }else{
            redirect(base_url() , 'refresh');
        }    
    }

    public function employeeApplications(){
        if ($this->session->userdata('user_login_access') != False) {
            $data['requests'] = $this->employee_model->GetEmployeeRequests();
            $this->load->view('backend/employeeApplications',$data);
        }else{
            redirect(base_url() , 'refresh');
        }    
    }

    public function Requests(){
        if ($this->session->userdata('user_login_access') != False) {
            $id = $this->session->userdata('user_login_id');
            $data['requests'] = $this->employee_model->GetRequests($id);
            $this->load->view('backend/requests',$data);
        }else{
            redirect(base_url() , 'refresh');
        }    
    }

    public function AddRequest(){
        if($this->session->userdata('user_login_access') != False) {
            $id = $this->input->post('id');
            $em_id = $this->session->userdata('user_login_id');
            $title = $this->input->post('title');
            $details = $this->input->post('details');
            $response = $this->input->post('response');
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters();
            $this->form_validation->set_rules('title', 'title', 'trim|required|min_length[5]|max_length[150]|xss_clean');
            $this->form_validation->set_rules('details', 'details', 'trim|xss_clean');
            $this->form_validation->set_rules('response', 'response', 'trim|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                echo validation_errors();
                #redirect('Disciplinary');
            } else {
                $data = array();
                $data = array(
                    'em_id' => $em_id,
                    'title' => $title,
                    'description' => $details,
                    'response' => $response
                );
                
                if(empty($id)){
                    $this->employee_model->AddRequest($data);

                    // Alert on screen
                    echo "Sent Successfully";

                    // Notify Admins 
                    // $adminIds = $this->employee_model->getAdminIds();
                    // $this->notification->sendGroupNotification($adminIds, 'Employee Request', 'employee/employee_requests');

                } else {
                    $data = array(
                        'title' => $title,
                        'description' => $details,
                        'response' => $response
                    );
                    $this->employee_model->UpdateRequest($id,$data);                       

                    echo "Updated Successfully";
                }     
            }
        }
        else{
            redirect(base_url() , 'refresh');
        }        
    }

    public function updateRequest(){
        if($this->session->userdata('user_login_access') != False) { 
            $id = $this->input->post('id');
            $data = $this->input->post(NULL, TRUE);
            $this->employee_model->UpdateRequest($id, $data);

            // Notify Employee
            // $data = $this->employee_model->GetSingleRequest($id);
            // $receiverId = $data->emp_id;
            
            // $this->notification->sendNotification($receiverId, 'Request Update', 'employee/requests');

            echo 'Updated Successfully';
        }else{
            redirect(base_url() , 'refresh');
        }
    }

    public function GetSingleRequest(){
        if($this->session->userdata('user_login_access') != False) {  
            $id= $this->input->get('id');
            $data = $this->employee_model->GetSingleRequest($id);
            echo json_encode($data);
        }
        else{
            redirect(base_url() , 'refresh');
        }   
    }

    public function RecruitmentRequirement()
    {
        if ($this->session->userdata('user_login_access') != False) {
            $this->load->view('backend/user/userRecruitmentForm');
        } else {
            redirect(base_url(), 'refresh');
        }
    }
    
    public function UniformIssuance()
    {
        if ($this->session->userdata('user_login_access') != False) {
            $this->load->view('backend/user/userUniformIssuanceForm');
        } else {
            redirect(base_url(), 'refresh');
        }
    }
    
    public function Add_bank_info(){
        if($this->session->userdata('user_login_access') != False) {
        $id = $this->input->post('id');
        $em_id = $this->input->post('emid');
        $holder = $this->input->post('holder_name');
        $bank = $this->input->post('bank_name');
        $branch = $this->input->post('branch_name');
        $number = $this->input->post('account_number');
        $account = $this->input->post('account_type');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters();
        $this->form_validation->set_rules('holder_name', 'holder name', 'trim|required|min_length[5]|max_length[120]|xss_clean');
        $this->form_validation->set_rules('account_number', 'account name', 'trim|required|min_length[5]|max_length[120]|xss_clean');
        $this->form_validation->set_rules('branch_name', 'branch name', 'trim|required|min_length[5]|max_length[120]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
			redirect("employee/view?I=" .base64_encode($em_id));
			} else {
            $data = array();
                $data = array(
                    'em_id' => $em_id,
                    'holder_name' => $holder,
                    'bank_name' => $bank,
                    'branch_name' => $branch,
                    'account_number' => $number,
                    'account_type' => $account
                );
            if(empty($id)){
                $success = $this->employee_model->Add_BankInfo($data);
                #$this->session->set_flashdata('feedback','Successfully Added');
                #redirect("employee/view?I=" .base64_encode($em_id));
                echo "Successfully Added";
            } else {
                $success = $this->employee_model->Update_BankInfo($id,$data);
                #$this->session->set_flashdata('feedback','Successfully Updated');
                #redirect("employee/view?I=" .base64_encode($em_id));
                echo "Successfully Updated";
            }
                       
        }
        }
        else{
            redirect(base_url() , 'refresh');
        }            
    }

    public function Reset_Password_Hr(){
        if($this->session->userdata('user_login_access') != False) {
        $id = $this->input->post('emid');
        $onep = $this->input->post('new1');
        $twop = $this->input->post('new2');
            if($onep == $twop){
                $data = array();
                $data = array(
                    'em_password'=> sha1($onep)
                );
        $success = $this->employee_model->Reset_Password($id,$data);
        #$this->session->set_flashdata('feedback','Successfully Updated');
        #redirect("employee/view?I=" .base64_encode($id));
                echo "Successfully Updated";
            } else {
        $this->session->set_flashdata('feedback','Please enter valid password');
        #redirect("employee/view?I=" .base64_encode($id)); 
                echo "Please enter valid password";
            }

        }
        else{
            redirect(base_url() , 'refresh');
        }        
    }

    public function Reset_Password(){
        if($this->session->userdata('user_login_access') != False) {
        $id = $this->input->post('emid');
        $oldp = sha1($this->input->post('old'));
        $onep = $this->input->post('new1');
        $twop = $this->input->post('new2');
        $pass = $this->employee_model->GetEmployeeId($id);
        if($pass->em_password == $oldp){
            if($onep == $twop){
                $data = array();
                $data = array(
                    'em_password'=> sha1($onep)
                );
        $success = $this->employee_model->Reset_Password($id,$data);
        $this->session->set_flashdata('feedback','Successfully Updated');
        #redirect("employee/view?I=" .base64_encode($id));
                echo "Successfully Updated";
            } else {
        $this->session->set_flashdata('feedback','Please enter valid password');
        #redirect("employee/view?I=" .base64_encode($id));
                echo "Please enter valid password";
            }
        } else {
            $this->session->set_flashdata('feedback','Please enter valid password');
            #redirect("employee/view?I=" .base64_encode($id));
            echo "Please enter valid password";
        }
        }
        else{
            redirect(base_url() , 'refresh');
        }        
    }

    public function Assign_leave(){
        if($this->session->userdata('user_login_access') != False) {
        $emid = $this->input->post('em_id');
        $type = $this->input->post('typeid');
        $day = $this->input->post('noday');
        $year = $this->input->post('year');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters();
        $this->form_validation->set_rules('typeid','typeid','trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
            #redirect('employee/Designation');
        }else{
            $data = array();
            $data = array(
                'emp_id' => $emid,
                'type_id' => $type,
                'day' => $day,
                'total_day' => '0',
                'dateyear' => $year
            );
            $this->employee_model->Add_Assign_Leave($data);
            echo "Successfully Added";
        }
        }
        else{
            redirect(base_url() , 'refresh');
        }
    }

    public function Add_File(){
        if($this->session->userdata('user_login_access') != False) { 
        $em_id = $this->input->post('em_id');    		
        $filetitle = $this->input->post('title');    		
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters();
            $this->form_validation->set_rules('title', 'title', 'trim|required|min_length[10]|max_length[120]|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                echo validation_errors();
                
                } else {
                if($_FILES['file_url']['name']){
                $file_name = $_FILES['file_url']['name'];
                $fileSize = $_FILES["file_url"]["size"]/1024;
                $fileType = $_FILES["file_url"]["type"];
                $new_file_name='';
                $new_file_name .= $file_name;

                $config = array(
                    'file_name' => $new_file_name,
                    'upload_path' => "./assets/images/users",
                    'allowed_types' => "gif|jpg|png|jpeg|pdf|doc|docx|xml|text|txt",
                    'overwrite' => False,
                    'max_size' => "40480000"
                );
        
                $this->load->library('Upload', $config);
                $this->upload->initialize($config);                
                if (!$this->upload->do_upload('file_url')) {
                    echo $this->upload->display_errors();
                    #redirect("employee/view?I=" .base64_encode($em_id));
                }
    
                else {
                    $path = $this->upload->data();
                    $img_url = $path['file_name'];
                    $data = array();
                    $data = array(
                        'em_id' => $em_id,
                        'file_title' => $filetitle,
                        'file_url' => $img_url
                    );
                $success = $this->employee_model->File_Upload($data); 
                #$this->session->set_flashdata('feedback','Successfully Updated');
                #redirect("employee/view?I=" .base64_encode($em_id));
                    echo "Successfully Updated";
                }
            }
                
            }
            }
        else{
            redirect(base_url() , 'refresh');
        }        
    }
    public function educationbyib(){
        if($this->session->userdata('user_login_access') != False) {  
		$id= $this->input->get('id');
		$data['educationvalue'] = $this->employee_model->GetEduValue($id);
		echo json_encode($data);
        }
    else{
		redirect(base_url() , 'refresh');
	} 
        
    }
    public function experiencebyib(){
        if($this->session->userdata('user_login_access') != False) {  
		$id= $this->input->get('id');
		$data['expvalue'] = $this->employee_model->GetExpValue($id);
		echo json_encode($data);
        }
        else{
            redirect(base_url() , 'refresh');
        } 
        
    }
    public function DisiplinaryByID(){
        if($this->session->userdata('user_login_access') != False) {  
            $id= $this->input->get('id');
            $data['desipplinary'] = $this->employee_model->GetDesValue($id);
            echo json_encode($data);
        }
        else{
            redirect(base_url() , 'refresh');
        }   
    }
    public function EduvalueDelet(){
        if($this->session->userdata('user_login_access') != False) {  
		$id= $this->input->get('id');
		$success = $this->employee_model->DeletEdu($id);
		echo "Successfully Deleted";
        }
    else{
		redirect(base_url() , 'refresh');
	} 
    }
    public function EXPvalueDelet(){
        if($this->session->userdata('user_login_access') != False) {  
		$id= $this->input->get('id');
		$success = $this->employee_model->DeletEXP($id);
		echo "Successfully Deleted";
        }
    else{
		redirect(base_url() , 'refresh');
	} 
    }
    public function DeletDisiplinary(){
        if($this->session->userdata('user_login_access') != False) {  
		$id= $this->input->get('D');
		$success = $this->employee_model->DeletDisiplinary($id);
		#echo "Successfully Deletd";
            redirect('employee/Disciplinary');
        }
    else{
		redirect(base_url() , 'refresh');
	} 
    }
    public function Add_Salary(){
        if($this->session->userdata('user_login_access') != False) { 
        $sid = $this->input->post('sid');
        $aid = $this->input->post('aid');
        $did = $this->input->post('did');
        $em_id = $this->input->post('emid');
        $type = $this->input->post('typeid');
        $total = $this->input->post('total');
        $basic = $this->input->post('basic');
        $medical = $this->input->post('medical');
        $houserent = $this->input->post('houserent');
        $conveyance = $this->input->post('conveyance');
        $provident = $this->input->post('provident');
        $bima = $this->input->post('bima');
        $tax = $this->input->post('tax');
        $others = $this->input->post('others');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters();
        $this->form_validation->set_rules('total', 'total', 'trim|required|min_length[3]|max_length[10]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
			#redirect("employee/view?I=" .base64_encode($em_id));
			} else {
            $data = array();
                $data = array(
                    'emp_id' => $em_id,
                    'type_id' => $type,
                    'total' => $total
                );
            if(!empty($sid)){
                $success = $this->employee_model->Update_Salary($sid,$data);
                #$this->session->set_flashdata('feedback','Successfully Updated');
                #echo "Successfully Updated";
                #$success = $this->employee_model->Add_Salary($data);
                #$insertId = $this->db->insert_id();
                #$this->session->set_flashdata('feedback','Successfully Added');
                #echo "Successfully Added";
                if(!empty($aid)){
                $data1 = array();
                $data1 = array(
                    'salary_id' => $sid,
                    'basic' => $basic,
                    'medical' => $medical,
                    'house_rent' => $houserent,
                    'conveyance' => $conveyance
                );
                $success = $this->employee_model->Update_Addition($aid,$data1);                    
                }
                if(!empty($did)){
                 $data2 = array();
                $data2 = array(
                    'salary_id' => $sid,
                    'provident_fund' => $provident,
                    'bima' => $bima,
                    'tax' => $tax,
                    'others' => $others
                );
                $success = $this->employee_model->Update_Deduction($did,$data2);                    
                }

                echo "Successfully Updated";                
            } else {
                $success = $this->employee_model->Add_Salary($data);
                $insertId = $this->db->insert_id();
                #$this->session->set_flashdata('feedback','Successfully Added');
                #echo "Successfully Added";
                $data1 = array();
                $data1 = array(
                    'salary_id' => $insertId,
                    'basic' => $basic,
                    'medical' => $medical,
                    'house_rent' => $houserent,
                    'conveyance' => $conveyance
                );
                $success = $this->employee_model->Add_Addition($data1);
                $data2 = array();
                $data2 = array(
                    'salary_id' => $insertId,
                    'provident_fund' => $provident,
                    'bima' => $bima,
                    'tax' => $tax,
                    'others' => $others
                );
                $success = $this->employee_model->Add_Deduction($data2); 
                echo "Successfully Added";
            }           
        }
        }
    else{
		redirect(base_url() , 'refresh');
	}        
    }
	public function confirm_mail_send($email,$pass_hash){
		$config = Array( 
		'protocol' => 'smtp', 
		'smtp_host' => 'ssl://smtp.googlemail.com', 
		'smtp_port' => 465, 
		'smtp_user' => 'mail.imojenpay.com', 
		'smtp_pass' => ''
		); 		  
         $from_email = "imojenpay@imojenpay.com"; 
         $to_email = $email; 
   
         //Load email library 
         $this->load->library('email',$config); 
   
         $this->email->from($from_email, 'Dotdev'); 
         $this->email->to($to_email);
         $this->email->subject('Hr Syatem'); 
		 $message	 =	"Your Login Email:"."$email";
		 $message	.=	"Your Password :"."$pass_hash"; 
         $this->email->message($message); 
   
         //Send mail 
         if($this->email->send()){ 
         	$this->session->set_flashdata('feedback','Kindly check your email To reset your password');
		 }
         else {
         $this->session->set_flashdata("feedback","Error in sending Email."); 
		 }			
	}
    public function Inactive_Employee(){
        $data['invalidem'] = $this->employee_model->getInvalidUser();
        $this->load->view('backend/invalid_user',$data);
    }
}
