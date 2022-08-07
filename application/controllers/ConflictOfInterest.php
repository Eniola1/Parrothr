 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConflictOfInterest extends CI_Controller {


    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('conflict_model');
        $this->load->model('settings_model');    
        $this->load->model('employee_model'); 
    }

    public function ConflictOfInterestForm()
    {
        if ($this->session->userdata('user_login_access') != False) {
            $this->load->view('backend/user/userConflictOfInterestForm');
        } else {
            redirect(base_url(), 'refresh');
        }
    }
    
    /**Add Conflict Of Interest */
    public function AddConflictOfInterest(){
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
                $this->conflict_model->addConflictOfInterest($data);
                echo "Sent Successfully";

                // Notify Admins 
                // $adminIds = $this->employee_model->getAdminIds();
                // $this->notification->sendGroupNotification($adminIds, 'Salary Advance', 'conflictOfInterest/employeeConflictOfInterest');
            }
        }else{
            redirect(base_url() , 'refresh');
        }      
    }

    public function deleteConflictOfinterest(){
        $id = $this->input->post('id');
        $this->conflict_model->deleteConflict($id);
        echo "Deleted Successfully";
    }

    /**Conflict of interest list for admin */
    public function employeeConflictOfInterest(){
        if($this->session->userdata('user_login_access') != False) { 
            $data['list'] = $this->conflict_model->showConflictOfInterest();
            // print_r($data);exit;
            $this->load->view('backend/conflict_interest',$data);
        }else{
            redirect(base_url() , 'refresh');
        }
    }
    
    /**Conflict of interest list for employee */
    public function personalConflictOfInterest(){
        if($this->session->userdata('user_login_access') != False) { 
            $id = $this->session->userdata('user_login_id');
            $data['list'] = $this->conflict_model->personalConflictOfInterest($id);
            // print_r($data);exit;
            $this->load->view('backend/personal_conflict_interest',$data);
        }else{
            redirect(base_url() , 'refresh');
        }
    }

    /**Get Conflict of Interest */
    public function getConflictInterest(){
        if($this->session->userdata('user_login_access') != False) { 
            $id = $this->input->get('id');
            $data['value'] = $this->conflict_model->getConflictInterestById($id);
            $this->load->view('backend/conflictOfInterestView.php',$data);
        }else{
            redirect(base_url() , 'refresh');
        }
    }
    
}