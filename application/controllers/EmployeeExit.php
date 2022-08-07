 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeExit extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('exit_model');
        $this->load->model('settings_model');
        $this->load->model('employee_model'); 
    }

    public function ExitPassForm()
    {
        if ($this->session->userdata('user_login_access') != False) {
            $this->load->view('backend/user/userExitPassForm');
        } else {
            redirect(base_url(), 'refresh');
        }
    }

    public function ExitInterviewForm()
    {
        if ($this->session->userdata('user_login_access') != False) {
            $id = $this->session->userdata('user_login_id');
            $data['value'] = $this->exit_model->getExitInterview($id);
            $data['employees'] = $this->employee_model->emselect();
            $this->load->view('backend/user/userExitInterviewForm', $data);
        } else {
            redirect(base_url(), 'refresh');
        }
    }

    /**Add Exit Pass */
    public function addExitPass(){
        if($this->session->userdata('user_login_access') != False) { 
            $em_id = $this->session->userdata('user_login_id');
            $reason = $this->input->post('reason');
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters();
            $this->form_validation->set_rules('reason', 'Reason', 'trim|required|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                echo validation_errors();
            } else {
                $data = array(
                    'emp_id' => $em_id,
                    'reason' => $reason
                );
                $this->exit_model->exitPass($data);
                echo "Sent Successfully";

                // Notify Admins 
                // $adminIds = $this->employee_model->getAdminIds();
                // $this->notification->sendGroupNotification($adminIds, 'Employee Exit Pass Request', 'employeeExit/exitPass');
            }
        }else{
            redirect(base_url() , 'refresh');
        }      
    }
    
    /**Add Exit Interview */
    public function addExitInterview(){
        if($this->session->userdata('user_login_access') != False) { 
            $data = $this->input->post(NULL, TRUE);
            $data['em_id'] = $this->session->userdata('user_login_id');

            $this->exit_model->exitInterview($data);
            echo "Sent Successfully";

            // Notify Admins 
            // $adminIds = $this->employee_model->getAdminIds();
            // $this->notification->sendGroupNotification($adminIds, 'Employee Exit Interview', 'employeeExit/exitPass');
        }else{
            redirect(base_url() , 'refresh');
        }      
    }

    /**Show Exit Pass */
    public function exitPass(){
        if($this->session->userdata('user_login_access') != False) { 
            $data['list'] = $this->exit_model->showExitPass();
            // var_dump($data);exit;
            $this->load->view('backend/exit_pass',$data);
        }else{
            redirect(base_url() , 'refresh');
        }

    }
    
    /**Show Exit Interview */
    public function exitInterview(){
        if($this->session->userdata('user_login_access') != False) { 
            $data['list'] = $this->exit_model->showExitInterview();
            // var_dump($data);exit;
            $this->load->view('backend/exit_interview',$data);
        }else{
            redirect(base_url() , 'refresh');
        }
    }

    /**Get Exit Pass */
    public function getExitPass(){
        $id = $this->input->get('id');
        $data = $this->exit_model->getExitPass($id);

        echo json_encode($data);
    }

    /**Update Exit Pass */
    public function updateExitPass(){
        $id = $this->input->post('id');
        $data = $this->input->post(NULL, TRUE);
        $this->exit_model->updateExitPass($id, $data);

        echo 'Updated Successfully';

        // Notify Employee
        // $data = $this->exit_model->getExitInterview($id);
        // $receiverId = $data->emp_id;
        // $this->notification->sendNotification($receiverId, 'Exit Pass Update', 'employeeExit/personalExitPassReport');
    }
    
    /** Exit Pass Report */
    public function exitPassReport(){
        if($this->session->userdata('user_login_access') != False) { 
            $data['list'] = $this->exit_model->showExitPassReport();
            // var_dump($data);exit;
            $this->load->view('backend/exitPassReport',$data);
        }else{
            redirect(base_url() , 'refresh');
        }
    }

    /**Show Exit Interview */
    public function getExitInterview(){
        if($this->session->userdata('user_login_access') != False) { 
            $id = $this->input->get('id');
            $data['value'] = $this->exit_model->getExitInterview($id);
            // print_r($data);exit;
            $this->load->view('backend/exitInterviewView',$data);
        }else{
            redirect(base_url() , 'refresh');
        }
    }

    /** Employee Exit Pass Records */
    public function personalExitPassReport(){
        if($this->session->userdata('user_login_access') != False) { 
            $id = $this->session->userdata('user_login_id');
            $data['list'] = $this->exit_model->showEmployeeExitPassReport($id);
            // var_dump($data);exit;
            $this->load->view('backend/personalExitPassReport',$data);
        }else{
            redirect(base_url() , 'refresh');
        }
    }
    public function personalExitInterview(){
        if($this->session->userdata('user_login_access') != False) { 
            $id = $this->session->userdata('user_login_id');
            $data['list'] = $this->exit_model->personalExitInterview($id);
            $this->load->view('backend/personal_exit_interview',$data);
        }else{
            redirect(base_url() , 'refresh');
        }
    }
    
    public function deleteExitInterview(){
        if($this->session->userdata('user_login_access') != False) { 
            $id = $this->input->post('id');
            $this->exit_model->deleteExitInterview($id);
            echo 'Deleted Successfully';
        }else{
            redirect(base_url() , 'refresh');
        }
    }
    
}