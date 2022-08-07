 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Probation extends CI_Controller {


    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('settings_model');
        $this->load->model('employee_model');
        $this->load->model('organization_model');
        $this->load->model('probation_model');
    }

    /**List of probations */
    public function index()
    {
        if ($this->session->userdata('user_login_access') != False) {
            if ( $this->session->userdata('user_type') === 'ADMIN') {
                $data['list'] = $this->probation_model->probationList();
                $this->load->view('backend/probation', $data);
            }else{
                $id = $this->session->userdata('user_login_id');
                $data['list'] = $this->probation_model->empProbationList($id);
                $this->load->view('backend/user/probation', $data);
            }
        } else {
            redirect(base_url(), 'refresh');
        }
    }
   
    /**start probation form */
    public function form()
    {
        if ($this->session->userdata('user_login_access') != False) {
            $data['employees'] = $this->employee_model->emselect();
            $this->load->view('backend/user/userProbationForm', $data);
        } else {
            redirect(base_url(), 'refresh');
        }
    }

    /**Update probation form */
    public function updateForm(){
        if ($this->session->userdata('user_login_access') != False) {
            $data['employees'] = $this->employee_model->emselect();
            $data['managers'] = $this->organization_model->getDesignationEmployees(2);
            $this->load->view('backend/user/updateProbationForm', $data);
        } else {
            redirect(base_url(), 'refresh');
        }
    }
    
    /**Add Probation */
    public function addProbabtion(){
        if($this->session->userdata('user_login_access') != False) { 
            $id = $this->input->post('id');
            $data = $this->input->post(NULL, TRUE);
            $data['supervisor_id'] = $this->session->userdata('user_login_id');
            if ($id) {
                $this->probation_model->updateProbation($id, $data);
                echo "Updated Successfully";

                // Notify other participants
                // $probationData = $this->probation_model->probationData($id);
                // $receiverIds = [$probationData->em_id, $probationData->hod_id, $probationData->supervisor_id, $probationData->gm_id];
                // $adminIds = $this->employee_model->getAdminIds();

                // $receiverIds = array_push($receiverIds, $adminIds);
                // $this->notification->sendGroupNotification($receiverIds, 'Employee Probation Update', 'probation');
            } else {
                $this->probation_model->addProbation($data);
                echo "Sent Successfully";

                // Notify HOD
                // $probationData = $this->probation_model->probationData($id);
                // $receiverId = $probationData->hod_id;
                
                // $this->notification->sendNotification($receiverId, 'Employee Probation', 'probation');
            }
        }else{
            redirect(base_url() , 'refresh');
        }      
    }

    /**Get probation data */
    public function getProbationData(){
        if ($this->session->userdata('user_login_access') != False) {
            $id = $this->input->get('id');
            $data = $this->probation_model->probationData($id);
            $data->user_loggedin = $this->session->userdata('user_login_id');
            $data->user_type = $this->session->userdata('user_type');
            echo json_encode($data);
        } else {
            redirect(base_url(), 'refresh');
        }
    }

    /**Delete Probation Data */
    public function deleteProbation()
    {
        if ($this->session->userdata('user_login_access') != False && $this->session->userdata('user_type') == 'ADMIN') {
            $id = $this->input->post('id');
            $this->probation_model->deleteProbation($id);
            echo 'Deleted Successfully';
        } else {
            redirect(base_url(), 'refresh');
        }
    }

    
}