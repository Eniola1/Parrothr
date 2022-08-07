 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UniformIssuance extends CI_Controller {


    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('uniformissuance_model');
    }
    
    /**Add Uniform Issuance */
    public function AddUnifromIssuance(){
        if($this->session->userdata('user_login_access') != False) { 
            $manager_id = $this->session->userdata('user_login_id');
            $emp_id = $this->input->post('emp_id');
            $uniform_issued = $this->input->post('uniform_issued');
            $uniform_number = $this->input->post('uniform_number');
            $item = $this->input->post('item');
            $quantity = $this->input->post('quantity');
            $colour = $this->input->post('colour');
            $remarks = $this->input->post('remarks');
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters();
            $this->form_validation->set_rules('remarks', 'Remarks', 'trim|required|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                echo validation_errors();
            } else {
                $data = array(
                    'manager_id' => $manager_id,
                    'emp_id' => $emp_id,
                    'uniform_issued' => $uniform_issued,
                    'uniform_number' => $uniform_number,
                    'item' => $item,
                    'quantity' => $quantity,
                    'colour' => $colour,
                    'remarks' => $remarks,
                );
                $this->uniformissuance_model->addUniformRequest($data);
                echo "Sent Successfully";
            }
        }else{
            redirect(base_url() , 'refresh');
        }      
    }
    
}