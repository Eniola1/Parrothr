 <?php

    defined('BASEPATH') or exit('No direct script access allowed');

    class Appraisal extends CI_Controller
    {


        function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model('appraisal_model');
            $this->load->model('employee_model');
            $this->load->library('notification');
            $this->load->model('settings_model');
        }

        /**Show Appraisal form */
        public function PerformanceSelfAppraisal()
        {
            if ($this->session->userdata('user_login_access') != False) {
                $data['employees'] = $this->employee_model->emselect();
                $this->load->view('backend/user/userAppraisalForm', $data);
            } else {
                redirect(base_url(), 'refresh');
            }
        }

        /**Add Appraisal */
        public function AddAppraisal()
        {
            if ($this->session->userdata('user_login_access') != False) {
                $id = $this->input->post('id');
                $data = $this->input->post(NULL, TRUE);
                
                if ($id) {
                    $this->appraisal_model->updatePerfAppraisal($id, $data);
                    echo "Updated Successfully";

                    // Notify Employee
                    // $apprData = $this->appraisal_model->perfAppraisalData($id);
                    // $receiverId = $apprData->em_id;
                    // $this->notification->sendNotification($receiverId, 'Appraisal Update', 'appraisal/employeePerfAppraisalList');
                } else {
                    $data['em_id'] = $this->session->userdata('user_login_id');
                    $this->appraisal_model->addPerfAppraisal($data);                    
                    echo "Sent Successfully";
                    
                    // Notify Manager
                    // $receiverId = $data['manager_id'];
                    // $this->notification->sendNotification($receiverId, 'Employee Appraisal', 'appraisal/employeePerfAppraisalList');
                }
            } else {
                redirect(base_url(), 'refresh');
            }
        }

        /**Show Appraisal List for employee */
        public function employeePerfAppraisalList()
        {
            if ($this->session->userdata('user_login_access') != False) {
                $id = $this->session->userdata('user_login_id');
                $data['list'] = $this->appraisal_model->employeePerfAppraisalList($id);
                $this->load->view('backend/user/userAppraisalList', $data);
            } else {
                redirect(base_url(), 'refresh');
            }
        }

        /**Show Appraisal list for admin  */
        public function perfAppraisalList()
        {
            if ($this->session->userdata('user_login_access') != False && $this->session->userdata('user_type') == 'ADMIN') {
                $id = $this->session->userdata('user_login_id');
                $data['list'] = $this->appraisal_model->perfAppraisalList($id);
                $this->load->view('backend/appraisalList', $data);
            } else {
                redirect(base_url(), 'refresh');
            }
        }

        /**Show Appraisal data */
        public function perfAppraisalData()
        {
            if ($this->session->userdata('user_login_access') != False) {
                $data['employees'] = $this->employee_model->emselect();
                $this->load->view('backend/user/updateAppraisalForm', $data);
            } else {
                redirect(base_url(), 'refresh');
            }
        }

        /**Return Appraisal data */
        public function getPerfAppraisalData()
        {
            if ($this->session->userdata('user_login_access') != False) {
                $id = $this->input->get('id');
                $data = $this->appraisal_model->perfAppraisalData($id);
                $data->user_loggedin = $this->session->userdata('user_login_id');
                echo json_encode($data);
            } else {
                redirect(base_url(), 'refresh');
            }
        }

        /**Delete Appraisal Data */
        public function deleteAppraisal()
        {
            if ($this->session->userdata('user_login_access') != False && $this->session->userdata('user_type') == 'ADMIN') {
                $id = $this->input->post('id');
                $this->appraisal_model->deleteAppraisal($id);
                echo 'Deleted Successfully';
            } else {
                redirect(base_url(), 'refresh');
            }
        }

        // Show peer review form
        public function PeerReview()
        {
            if ($this->session->userdata('user_login_access') != False) {
                $data['employees'] = $this->employee_model->emselect();
                $this->load->view('backend/user/PeerReview', $data);
            } else {
                redirect(base_url(), 'refresh');
            }
        }

        // Add peer review data from form
        public function addPeerReview()
        {
            if ($this->session->userdata('user_login_access') != False) {
                $id = $this->input->post('id');
                $data = $this->input->post(NULL, TRUE);
                
                if ($id) {
                    $this->appraisal_model->updatePeerReview($id, $data);
                    echo "Updated Successfully";

                    // Notify other participants
                    // $peerReviewData = $this->appraisal_model->peerReviewData($id);
                    // $receiverIds = [$peerReviewData->em_id, $peerReviewData->peer_id, $peerReviewData->supervisor_id];
                    // $this->notification->sendGroupNotification($receiverIds, 'Peer Review Update', 'appraisal/employeePeerReviewList');
                } else {
                    $data['peer_id'] = $this->session->userdata('user_login_id');
                    $this->appraisal_model->addPeerReview($data);
                    echo "Sent Successfully";

                    // Notify Employee
                    // $receiverId = $data['em_id'];
                    // $this->notification->sendNotification($receiverId, 'Employee Appraisal', 'appraisal/employeePerfAppraisalList');
                }
            } else {
                redirect(base_url(), 'refresh');
            }
        }

        /**Show Peer Review list for admin  */
        public function peerReviewList()
        {
            if ($this->session->userdata('user_login_access') != False && $this->session->userdata('user_type') == 'ADMIN') {
                $data['list'] = $this->appraisal_model->peerReviewList();
                $this->load->view('backend/peerReviewList', $data);
            } else {
                redirect(base_url(), 'refresh');
            }
        }

        /**Show Peer Review List for employee */
        public function employeePeerReviewList()
        {
            if ($this->session->userdata('user_login_access') != False) {
                $id = $this->session->userdata('user_login_id');
                $data['list'] = $this->appraisal_model->empPeerReviewList($id);
                $this->load->view('backend/user/userPeerReviewList', $data);
            } else {
                redirect(base_url(), 'refresh');
            }
        }

        /**Return Peer Review data */
        public function getPeerReviewData()
        {
            if ($this->session->userdata('user_login_access') != False) {
                $id = $this->input->get('id');
                $data = $this->appraisal_model->peerReviewData($id);
                $data->user_loggedin = $this->session->userdata('user_login_id');
                echo json_encode($data);
            } else {
                redirect(base_url(), 'refresh');
            }
        }

        /**Show Peer Review data */
        public function peerReviewData()
        {
            if ($this->session->userdata('user_login_access') != False) {
                $data['employees'] = $this->employee_model->emselect();
                $this->load->view('backend/user/updatePeerReviewForm', $data);
            } else {
                redirect(base_url(), 'refresh');
            }
        }

        /**Delete Peer Review Data */
        public function deletePeerReview()
        {
            if ($this->session->userdata('user_login_access') != False && $this->session->userdata('user_type') == 'ADMIN') {
                $id = $this->input->post('id');
                $this->appraisal_model->deletePeerReview($id);
                echo 'Deleted Successfully';
            } else {
                redirect(base_url(), 'refresh');
            }
        }



        /**Used for adding a huge number of columns into any table */
        public function addColumns()
        {
            $this->appraisal_model->addColumns();
        }
    }
