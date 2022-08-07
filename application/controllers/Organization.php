 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organization extends CI_Controller {


    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('login_model');
        $this->load->model('dashboard_model'); 
        $this->load->model('employee_model'); 
        $this->load->model('organization_model');
        $this->load->model('settings_model');
        $this->load->model('leave_model');
    }
    
	public function index()
	{
		#Redirect to Admin dashboard after authentication
        if ($this->session->userdata('user_login_access') == 1)
            redirect('dashboard/overview');
            $data=array();
            #$data['settingsvalue'] = $this->dashboard_model->GetSettingsValue();
			$this->load->view('login');
	}
    public function Department(){
        if($this->session->userdata('user_login_access') != False) { 
            $data['department'] = $this->organization_model->depselect();
            $this->load->view('backend/department',$data); 
        }
        else{
            redirect(base_url() , 'refresh');
        }            
    }
    
    public function Branch(){
        if($this->session->userdata('user_login_access') != False) { 
            $data['branch'] = $this->organization_model->branchSelect();
            $this->load->view('backend/branch',$data); 
        }
        else{
            redirect(base_url() , 'refresh');
        }            
    }

    /**Create branch */
    public function saveBranch(){
        if($this->session->userdata('user_login_access') != False) { 
            // get all input fields with xss validation
            $data = $this->input->post(NUll, TRUE);
            
            $this->organization_model->addBranch($data);
            echo "Successfully Added";
        }else{
            redirect(base_url() , 'refresh');
        }        
    }
    
    /**Get employee from a branch */
    public function BranchDetails($id){
        if($this->session->userdata('user_login_access') != False) { 
            $data['branchEmployees'] = $this->organization_model->getBranchEmployees($id);
            $data['branchName'] = $this->organization_model->getBranchName($id);
            // var_dump($data);exit;
            $this->load->view('backend/branchDetails',$data); 
        }
        else{
            redirect(base_url() , 'refresh');
        }    
    }
    
    /**Get employees from a branch API*/
    public function branchEmployees(){
        if($this->session->userdata('user_login_access') != False) { 
            $id = $this->input->get('id');
            $data = $this->organization_model->getBranchEmployees($id);
            echo json_encode($data);
        }
        else{
            redirect(base_url() , 'refresh');
        }    
    }

    /**Delete Branch */
    public function deleteBranch($id){
        if($this->session->userdata('user_login_access') != False) { 
            $this->organization_model->deleteBranch($id);
            $this->session->set_flashdata('delsuccess', 'Successfully Deleted');
            redirect('organization/branch');
        }
        else{
            redirect(base_url() , 'refresh');
        }            
    }
    
    /**Edit view Branch */
    public function editBranch($id){
        if($this->session->userdata('user_login_access') != False) { 
            $data['branch'] = $this->organization_model->branchSelect();
            $data['editBranch']=$this->organization_model->branchEdit($id);
            $this->load->view('backend/branch', $data);
        }
        else{
            redirect(base_url() , 'refresh');
        }        
    }
   
    /**Update Branch */
    public function updateBranch(){
        if($this->session->userdata('user_login_access') != False) { 
            $id = $this->input->post('id');
            $data =  $this->input->post(NULL, TRUE);
            $this->organization_model->updateBranch($id, $data);
            echo "Updated Successfully";
        }
        else{
            redirect(base_url() , 'refresh');
        }            
    }

    public function DepartmentDetails($depId){
        if($this->session->userdata('user_login_access') != False) { 
            $data['departmentName'] = $this->organization_model->getDepartmentName($depId);
            $data['departmentDetails'] = $this->organization_model->getDepartmentEmployees($depId);
            // var_dump($data['departmentName']);exit;
            $this->load->view('backend/departmentDetails',$data); 
        }
        else{
            redirect(base_url() , 'refresh');
        }    
    }

    public function DesignationDetails($desId){
        if($this->session->userdata('user_login_access') != False) { 
            $data['designationName'] = $this->organization_model->getDesignationName($desId);
            $data['designationDetails'] = $this->organization_model->getDesignationEmployees($desId);
            // var_dump($data['departmentName']);exit;
            $this->load->view('backend/designationDetails',$data); 
        }
        else{
            redirect(base_url() , 'refresh');
        }    
    }

    public function Save_dep(){
        if($this->session->userdata('user_login_access') != False) { 
        $dep = $this->input->post('department');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('department','department','trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
        }else{
            $data = array();
            $data = array('dep_name' => $dep);
            $success = $this->organization_model->Add_Department($data);
            $this->session->set_flashdata('feedback','Successfully Added');
            echo "Successfully Added";
        }
            }
        else{
            redirect(base_url() , 'refresh');
        }        
    }

    public function Delete_dep($dep_id){
        if($this->session->userdata('user_login_access') != False) { 
            $this->organization_model->department_delete($dep_id);
            $this->session->set_flashdata('delsuccess', 'Successfully Deleted');
            redirect('organization/Department');
        }
        else{
            redirect(base_url() , 'refresh');
        }            
    }

    public function Dep_edit($dep){
        if($this->session->userdata('user_login_access') != False) { 
            $data['department'] = $this->organization_model->depselect();
            $data['editdepartment']=$this->organization_model->department_edit($dep);
            $this->load->view('backend/department', $data);
        }
        else{
            redirect(base_url() , 'refresh');
        }        
    }

    public function Update_dep(){
        if($this->session->userdata('user_login_access') != False) { 
        $id = $this->input->post('id');
        $department = $this->input->post('department');
        $data =  array('dep_name' => $department );
        $this->organization_model->Update_Department($id, $data);
        #$this->session->set_flashdata('feedback','Updated Successfully');
        echo "Successfully Added";
        }
    else{
		redirect(base_url() , 'refresh');
	}            
    }
    public function Designation(){
        if($this->session->userdata('user_login_access') != False) { 
        $data['designation'] = $this->organization_model->desselect();
        $this->load->view('backend/designation',$data);
        }
    else{
		redirect(base_url() , 'refresh');
	}        
    }
    public function Organogram(){

        $data=array();
        $data['settingsvalue'] = $this->settings_model->GetSettingsValue();
    
        if($data['settingsvalue']){
            if($this->session->userdata('user_login_access') != False) {
                if ($this->session->userdata('user_type') == "ADMIN") {
                    $this->load->view('backend/organogram');
                }else{
                    $this->load->view('backend/user/userOrganogram');
                }
                
            }else{
                redirect(base_url() , 'refresh');
            }  
        }else{
            redirect(base_url() , 'refresh');
        }  
    }
    public function hrOrganogram(){

        $data=array();
        $data['settingsvalue'] = $this->settings_model->GetSettingsValue();
    
        if($data['settingsvalue']){
            if($this->session->userdata('user_login_access') != False) {
                if ($this->session->userdata('user_type') == "ADMIN") {
                    $this->load->view('backend/hrOrganogram');
                }else{
                    $this->load->view('backend/user/hrOrganogram');
                }
                
            }else{
                redirect(base_url() , 'refresh');
            }  
        }else{
            redirect(base_url() , 'refresh');
        }  
    }
    public function adminOrganogram(){

        $data=array();
        $data['settingsvalue'] = $this->settings_model->GetSettingsValue();
    
        if($data['settingsvalue']){
            if($this->session->userdata('user_login_access') != False) {
                if ($this->session->userdata('user_type') == "ADMIN") {
                    $this->load->view('backend/adminOrganogram');
                }else{
                    $this->load->view('backend/user/adminOrganogram');
                }
                
            }else{
                redirect(base_url() , 'refresh');
            }  
        }else{
            redirect(base_url() , 'refresh');
        }  
    }

    public function accountOrganogram(){

        $data=array();
        $data['settingsvalue'] = $this->settings_model->GetSettingsValue();
    
        if($data['settingsvalue']){
            if($this->session->userdata('user_login_access') != False) {
                if ($this->session->userdata('user_type') == "ADMIN") {
                    $this->load->view('backend/accountOrganogram');
                }else{
                    $this->load->view('backend/user/accountOrganogram');
                }
                
            }else{
                redirect(base_url() , 'refresh');
            }  
        }else{
            redirect(base_url() , 'refresh');
        }  
    }
    public function account1Organogram(){

        $data=array();
        $data['settingsvalue'] = $this->settings_model->GetSettingsValue();
    
        if($data['settingsvalue']){
            if($this->session->userdata('user_login_access') != False) {
                if ($this->session->userdata('user_type') == "ADMIN") {
                    $this->load->view('backend/account1Organogram');
                }else{
                    $this->load->view('backend/user/account1Organogram');
                }
                
            }else{
                redirect(base_url() , 'refresh');
            }  
        }else{
            redirect(base_url() , 'refresh');
        }  
    }
    public function newOrganogram(){

        $data=array();
        $data['settingsvalue'] = $this->settings_model->GetSettingsValue();
    
        if($data['settingsvalue']){
            if($this->session->userdata('user_login_access') != False) {
                if ($this->session->userdata('user_type') == "ADMIN") {
                    $this->load->view('backend/newOrganogram');
                }else{
                    $this->load->view('backend/user/newOrganogram');
                }
                
            }else{
                redirect(base_url() , 'refresh');
            }  
        }else{
            redirect(base_url() , 'refresh');
        }  
    }

    public function Save_des(){
        if($this->session->userdata('user_login_access') != False) { 
        $des = $this->input->post('designation');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters();
        $this->form_validation->set_rules('designation','designation','trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
        }else{
            $data = array();
            $data = array('des_name' => $des);
            $success = $this->organization_model->Add_Designation($data);
            echo "Successfully Added";
        }
        }
    else{
		redirect(base_url() , 'refresh');
	}            
    }
    public function des_delete($des_id){
        if($this->session->userdata('user_login_access') != False) {
        $this->organization_model->designation_delete($des_id);
        $this->session->set_flashdata('delsuccess', 'Successfully Deleted');
        redirect('organization/Designation');
        }
    else{
		redirect(base_url() , 'refresh');
	}        
    }
    public function Edit_des($des){
        if($this->session->userdata('user_login_access') != False) {
        $data['designation'] = $this->organization_model->desselect();
        $data['editdesignation']=$this->organization_model->designation_edit($des);
        $this->load->view('backend/designation', $data);
        }
    else{
		redirect(base_url() , 'refresh');
	}            
    }
    public function Update_des(){
        if($this->session->userdata('user_login_access') != False) {
        $id = $this->input->post('id');
        $designation = $this->input->post('designation');
        $data =  array('des_name' => $designation );
        $this->organization_model->Update_Designation($id, $data);
        echo "Successfully Updated";
        }
    else{
		redirect(base_url() , 'refresh');
	}        
    }
    
}