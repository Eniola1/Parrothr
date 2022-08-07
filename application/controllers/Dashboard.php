 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	    function __construct() {
        parent::__construct();
        date_default_timezone_set('Africa/Lagos');
        $this->load->database();
        $this->load->model('login_model');
        $this->load->model('dashboard_model'); 
        $this->load->model('employee_model');
        $this->load->model('settings_model');    
        $this->load->model('notice_model');    
        $this->load->model('project_model');    
        $this->load->model('leave_model');    
        $this->load->model('loan_model');    
        $this->load->model('payroll_model');    
        $this->load->model('organization_model');    
        $this->load->model('notification_model');    
        $this->load->model('event_model'); 
        $this->year = date('Y');
        $this->month = date('m');
    }
    
	public function index()
	{
		#Redirect to Admin dashboard after authentication
        if ($this->session->userdata('user_login_access') == 1)
			redirect('dashboard/overview');
		// $data=array();
		// $data['settingsvalue'] = $this->dashboard_model->GetSettingsValue();
		$this->load->view('login');
	}
    
    /**
     *  Any changes made here in the overview function should be added to the date() function below if it still exists
     */
    public function overview(){
		$data=array();
		$data['settingsvalue'] = $this->settings_model->GetSettingsValue();

        if($this->session->userdata('user_login_access') != False and $data['settingsvalue']) {
            $data['notices'] = $this->notice_model->GetNotice();
            $data['employees'] = count($this->employee_model->emselect());
            $data['allEmployees'] = count($this->employee_model->GetAllEmployee());
            $data['leaveApps'] = count($this->leave_model->AllLeaveAPPlication());
            $data['onLeaveApps'] = count($this->leave_model->AllOnLeaveAPPlication());
            $data['approvedSalAdv'] = count($this->payroll_model->approvedSalaryAdvance());
            $data['awaitingSalAdv'] = count($this->payroll_model->awaitingSalaryAdvance());
            $data['projects'] = count($this->project_model->GetProjectsValue());
            $data['projectsCompleted'] = count($this->project_model->GetProjectsCompleted());
            $data['calendar'] = $this->event_model->getdashboardcalendar($this->year, $this->month);
            $data['event'] = $this->event_model;
            if ($this->session->userdata('user_type') == "ADMIN") {
                $this->load->view('backend/dashboard', $data);
            }else{
                $data['employee'] = $this->employee_model;
                $id = $this->session->userdata('user_login_id');
                $depId = $this->employee_model->getdepartmentId($id);
                $desId = $this->employee_model->getdesignationId($id);
                $branch = $this->employee_model->getbranchId($id);
                $data['employeeOfTheMonth'] = $this->employee_model->getEmployeeOfTheMonthByBranch($branch);
                $data['salary_advance'] = $this->payroll_model->getSalaryAdvanceByEmployee($id);
                $data['leave'] = $this->leave_model->GetallApplication($id);
                $data['employeeNotices'] = $this->notice_model->GetEmployeeNotice($depId, $desId, $branch);
                $data['birthdays'] = $this->leave_model->GetBirthdays();
                $this->load->view('backend/user/userDashboard', $data);
            }
        }else{
            redirect(base_url() , 'refresh');
        }  
    }
    
    function metrics(){
        // Metrics for Employee Status Pie CHart
        $departments = $this->organization_model->depselect();
        foreach ($departments as $value) {
            $data[$value->dep_name] = count($this->organization_model->getDepartmentEmployees($value->id));
        }
        $data['total'] = count($this->employee_model->emselect());
        echo json_encode($data);
    }

    public function add_todo(){
        $userid = $this->input->post('userid');
        $tododata = $this->input->post('todo_data');
        $date = date("Y-m-d h:i:sa");
        $this->load->library('form_validation');
        //validating to do list data
        $this->form_validation->set_rules('todo_data', 'To-do Data', 'trim|required|min_length[5]|max_length[150]|xss_clean');        
        if($this->form_validation->run() == FALSE){
            echo validation_errors();
        } else {
        $data=array();
        $data = array(
        'user_id' => $userid,
        'to_dodata' =>$tododata,
        'value' =>'1',
        'date' =>$date    
        );
        $success = $this->dashboard_model->insert_tododata($data);
            #echo "successfully added";
            if($this->db->affected_rows()){
                echo "successfully added";
            } else {
                echo "validation Error";
            }
        }        
    }
	public function Update_Todo(){
        $id = $this->input->post('toid');
		$value = $this->input->post('tovalue');
			$data = array();
			$data = array(
				'value'=> $value
			);
        $update= $this->dashboard_model->UpdateTododata($id,$data);
        $inserted = $this->db->affected_rows();
		if($inserted){
			$message="Successfully Added";
			echo $message;
		} else {
			$message="Something went wrong";
			echo $message;			
		}
	}    

    public function date($year =null, $month = null)
	{
        $data=array();
		$data['settingsvalue'] = $this->settings_model->GetSettingsValue();

		if($data['settingsvalue']){
			if($this->session->userdata('user_login_access') != False) {
                $data['notices'] = $this->notice_model->GetNotice();
                $data['employees'] = count($this->employee_model->emselect());
                $data['allEmployees'] = count($this->employee_model->GetAllEmployee());
                $data['leaveApps'] = count($this->leave_model->AllLeaveAPPlication());
                $data['onLeaveApps'] = count($this->leave_model->AllOnLeaveAPPlication());
                $data['approvedSalAdv'] = count($this->payroll_model->approvedSalaryAdvance());
                $data['awaitingSalAdv'] = count($this->payroll_model->awaitingSalaryAdvance());
                $data['projects'] = count($this->project_model->GetProjectsValue());
                $data['projectsCompleted'] = count($this->project_model->GetProjectsCompleted());
                $data['calendar'] = $this->event_model->getdashboardcalendar($year, $month);
                $data['event'] = $this->event_model;
                if ($this->session->userdata('user_type') == "ADMIN") {
                    $this->load->view('backend/dashboard', $data);
                }else{
                    $data['employee'] = $this->employee_model;
                    $id = $this->session->userdata('user_login_id');
                    $depId = $this->employee_model->getdepartmentId($id);
                    $desId = $this->employee_model->getdesignationId($id);
                    $branch = $this->employee_model->getbranchId($id);
                    $data['employeeOfTheMonth'] = $this->employee_model->getEmployeeOfTheMonthByBranch($branch);
                    $data['salary_advance'] = $this->payroll_model->getSalaryAdvanceByEmployee($id);
                    $data['leave'] = $this->leave_model->GetallApplication($id);
                    $data['employeeNotices'] = $this->notice_model->GetEmployeeNotice($depId, $desId, $branch);
                    $data['birthdays'] = $this->leave_model->GetBirthdays();
                    $this->load->view('backend/user/userDashboard', $data);
                }
			}else{
				redirect(base_url() , 'refresh');
			}  
        }else{
            redirect(base_url() , 'refresh');
        }  
	}

}
