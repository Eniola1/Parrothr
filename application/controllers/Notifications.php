 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifications extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('notification_model');  
        $this->load->library('notification');
    }
    

    public function getNotifications(){
        $id = $this->session->userdata('user_login_id');
        $notifications = $this->notification_model->getNotification($id);

        echo json_encode($notifications);
    }

    public function seenNotifications(){
        $id = $this->session->userdata('user_login_id');
        $this->notification_model->seenNotification($id);
    }

    public function testNotification(){
        $this->notification->sendEmail('chukajide@gmail.com', 'Test', 'dashboard');
    }
}
