
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('login_model');
        $this->load->model('dashboard_model'); 
        $this->load->model('employee_model'); 
        $this->load->model('notice_model');
        $this->load->model('settings_model');
        $this->load->model('leave_model');
        $this->load->model('organization_model');

    }
    
    public function All_notice(){
        if($this->session->userdata('user_login_access') != False) {
            $data['notices'] = $this->notice_model->GetNotice();
            $data['departments'] = $this->organization_model->depselect();
            $data['designations'] = $this->organization_model->desselect();
            $data['branches'] = $this->organization_model->branchSelect();
            // var_dump($data['notices']);exit;
            if ($this->session->userdata('user_type') == "ADMIN") {
                $this->load->view('backend/notice',$data);
            }else{
                $id = $this->session->userdata('user_login_id');
                $depId = $this->employee_model->getdepartmentId($id);
                $desId = $this->employee_model->getdesignationId($id);
                $branch = $this->employee_model->getbranchId($id);
                $data['employeeNotices'] = $this->notice_model->GetEmployeeNotice($depId, $desId, $branch);
                // var_dump($data['employeeNotices']);exit;    
                $this->load->view('backend/user/userNotice',$data);
            }
        }
        else{
            redirect(base_url() , 'refresh');
        }        
    }

    public function Published_Notice(){
        if($this->session->userdata('user_login_access') != False) {    
            $dep_id = $this->input->post('dep_id');    		
            $des_id = $this->input->post('des_id');    		
            $branch = $this->input->post('branch');    		
            $message = $this->input->post('message');    		
            $title = $this->input->post('title');    		
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters();
            $this->form_validation->set_rules('title', 'title', 'required|min_length[3]|max_length[150]|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                echo validation_errors();
                #redirect("notice/All_notice");
            } else {
                    $data = array();
                    $data = array(
                        'dep_id' => $dep_id,
                        'des_id' => $des_id,
                        'branch' => $branch,
                        'message' => $message,
                        'title' => $title,
                    );
                    $this->notice_model->Published_Notice($data); 
                    echo "Successfully Added";
                    
                    // // Get people to notify
                    // $receiverIds = [];  
                    // if(empty($branch) && empty($dep_id) && empty($des_id)){
                    //     $receiverIds = $this->employee_model->emselect();
                    // }elseif($branch && empty($dep_id) && empty($des_id)){
                    //     $receiverIds = $this->organization_model->getBranchEmployees($branch);
                    // }elseif($branch && $dep_id && empty($des_id)){
                    //     $receiverIds = $this->organization_model->getBranchAndDepEmployeesIds($branch, $dep_id);
                    // }elseif($branch && $dep_id && $des_id){
                    //     $receiverIds = $this->organization_model->getBranchAndDepAndDesEmployeesIds($branch, $dep_id, $des_id);
                    // }elseif($branch && $dep_id && $des_id){
                    //     $receiverIds = $this->organization_model->getBranchAndDepAndDesEmployeesIds($branch, $dep_id, $des_id);
                    // }
                    // // Notify who the notification applies to 
                    // $this->notification->sendGroupNotification($receiverIds, 'New Notice', 'notice/All_notice');
            }
        }
        else{
            redirect(base_url() , 'refresh');
        }        
    }

    public function deleteNotice(){
        $id = $this->input->post('id');
        $this->notice_model->deleteNotice($id);
        echo "Deleted successfully";
    }

    public function getSingleNotice(){
        if($this->session->userdata('user_login_access') != False) {  
            $id= $this->input->get('id');
            $data = $this->notice_model->GetSingleRequest($id);
            echo json_encode($data);
        }
        else{
            redirect(base_url() , 'refresh');
        }   
    }
    
}
