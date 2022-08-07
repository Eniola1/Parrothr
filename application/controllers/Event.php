 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

    public $year ;
    public $month;
    function __construct() {
        parent::__construct();
        $this->load->model('event_model'); 
        $this->load->model('settings_model');
        $this->load->model('employee_model');

        $this->year = date("Y",time());
        $this->month = date("m",time());
    }

	public function index()
	{
        if ($this->session->userdata('user_login_access') == 1)
            $data['calendar'] = $this->event_model->getcalendar($this->year, $this->month);
            $data['event'] = $this->event_model;
            $this->load->view('backend/event',$data);
		$this->load->view('login');
	}
	public function date($year =null, $month = null)
	{
        if ($this->session->userdata('user_login_access') == 1)
            $data['calendar'] = $this->event_model->getcalendar($year, $month);
            $this->load->view('backend/event',$data);
		$this->load->view('login');
	}

    public function createEvent(){
        $title = $this->input->post('title');		
        $description = $this->input->post('description');		
        $date = $this->input->post('date');		

        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters();
        $this->form_validation->set_rules('title', 'title', 'trim|required|xss_clean');

        $this->form_validation->set_rules('description', 'description','trim|xss_clean');


        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
        } else {
            $data = array(
                'title' => $title, 
                'description' => $description, 
                'date' => $date, 
            );
            $create = $this->event_model->insertEvent($data);
            if ($create) {
                echo 'Event Created Successfully';
            }else{
                echo 'Error occured, please try again';
            }
        }
    }

    public function getEvent(){
        $date = $this->input->get('date');
        $title = $this->input->get('title');
        $date = DateTime::createFromFormat('dMY', $date);
        $date = $date->format('Y-m-d');
        // echo $date; exit;
        $event = $this->event_model->getEventTitle($date, $title);
        echo json_encode($event);
    }

    public function getEventEdit(){
        $id = $this->input->get('id');
        $event = $this->event_model->getEventDetails($id);
        echo json_encode($event);
    }

    public function updateEvent(){
        // Get all input fields
        $data = $this->input->post(NULL, TRUE);
        $id = $this->input->post('id');

        $this->event_model->updateEvent($data, $id);
        
        echo 'Updated Successfully';
    }

    public function deleteEvent(){
        $id = $this->input->post('id');
        $delete = $this->event_model->deleteEvent($id);

        echo json_encode($delete);
    }

}
