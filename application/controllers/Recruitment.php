 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruitment extends CI_Controller {


    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('recruitment_model');
        $this->load->model('settings_model');
        $this->load->model('employee_model');
    }
    
    /**Add Recruitment Requirement*/
    public function AddRecruitment(){
        if($this->session->userdata('user_login_access') != False) { 
            $manager_id = $this->session->userdata('user_login_id');
            $des_id = $this->input->post('des_id');
            $career_level = $this->input->post('career_level');
            $required_quantity = $this->input->post('required_quantity');
            $reason = $this->input->post('reason');
            $consequence = $this->input->post('consequence');
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters();
            $this->form_validation->set_rules('reason', 'Reason', 'trim|required|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                echo validation_errors();
            } else {
                $data = array(
                    'manager_id' => $manager_id,
                    'des_id' => $des_id,
                    'career_level' => $career_level,
                    'required_quantity' => $required_quantity,
                    'reason' => $reason,
                    'consequence' => $consequence,
                );
                $this->recruitment_model->addRequirement($data);
                echo "Sent Successfully";
            }
        }else{
            redirect(base_url() , 'refresh');
        }      
    }
    
}