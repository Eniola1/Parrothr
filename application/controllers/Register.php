<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('login_model');
        $this->load->model('employee_model');
        $this->load->model('organization_model');
        $this->load->model('dashboard_model');
		$this->load->library('notification');
		$this->load->dbforge();
			
    }
    
	public function index()
	{
		$data['departments'] = $this->organization_model->depselect();
		$data['designations'] = $this->organization_model->desselect();
		$data['branches'] = $this->organization_model->branchSelect();
		$this->load->view('register', $data);
	}

	public function createEmployee(){
		// Get all input fields and XSS validation
		$data = $this->input->post(NULL, TRUE);   
		// create employee ID 
		$data['em_id'] = $this->createEmployeeID($data['last_name']);
		
		// check if email exists
		if($this->employee_model->Does_email_exists($data['em_email'])){
			$this->session->set_flashdata('register_email','Email already taken');
			redirect(base_url().'register', 'refresh');		
		}else {
			// hash password
			$data['em_password'] = sha1($data['em_password']);
							
			// Add employee
			$this->employee_model->Add($data);
			
			// Redirect to Login for user to login
			$this->session->set_flashdata('register_success','Login with Email and Password');
			redirect(base_url(), 'refresh');
			
			// Notify Employee
            // $receiverId = $data['em_id'];
            // $this->notification->sendNotification($receiverId, 'Welcome to ParrotHR', '');
		}    
    }

	/**Create employee ID and ensure there are no duplicates */
    function createEmployeeID($emID){
        $unique = false;
        while(!$unique){
            $check = substr($emID,0,3).rand(10,3000); 
            $data = $this->employee_model->emselectByID($check);

            if($data){
                continue;
            }else{
                $unique = true;
            }
        }
        return $check;
    } 

    /**Create Tenants by Ochiabuto Jideofor */
    function create_tenant($email, $companyName, $phone, $subdomainName) {

        // Create Database name with subdomain name
		$mysql_database = "hr_".$subdomainName."_db";

		$db['tenant'] = array(
			'dsn'	=> '',
			'hostname' => 'localhost',
			'username' => 'root',
			'password' => '',
			'database' => $mysql_database,
			'dbdriver' => 'mysqli',
			'dbprefix' => '',
			'pconnect' => FALSE,
			'db_debug' => (ENVIRONMENT !== 'production'),
			'cache_on' => FALSE,
			'cachedir' => '',
			'char_set' => 'utf8',
			'dbcollat' => 'utf8_general_ci',
			'swap_pre' => '',
			'encrypt' => FALSE,
			'compress' => FALSE,
			'stricton' => FALSE,
			'failover' => array(),
			'save_queries' => TRUE
		);	

		// Database structure file for each tenant
		$filename = 'database\parrothr.sql';
		
		// Create Database
		if ($this->dbforge->create_database($mysql_database))
		{
			// Select database and import database structure
			try {
				// close current database to avoid interferences
				$this->db->close();

				// Load the created database
				$this->load->database($db['tenant']);

				// Temporary variable, used to store current query
				$templine = '';
				// Read in entire file
				$lines = file($filename);
				// Loop through each line
				foreach ($lines as $line)
				{
					// Skip it if it's a comment
					if (substr($line, 0, 2) == '--' || $line == '')
						continue;

					// Add this line to the current segment
					$templine .= $line;
					// If it has a semicolon at the end, it's the end of the query
					if (substr(trim($line), -1, 1) == ';')
					{
						// Perform the query
						$this->db->query($templine);

						// Reset temp variable to empty
						$templine = '';
					}
				}

				// Create/Insert login details for tenant admin to access subdomain

				// create password from subdomain name
				$password = $subdomainName.mt_rand(100,999);
				$data = array(
					'em_id' => '001',
					'em_code' => $subdomainName.'001',
					'des_id' => '2',
					'dep_id' => '2',
					'em_email' => $email,
					'first_name' => $companyName,
					'last_name' => '',
					'em_password' => $password,
					'em_image' => 'Doe17531.jpg',
					'em_role' => 'ADMIN',
				);
				$this->db->insert('employee', $data);

				// Close database tenant database after migration
				$this->db->close();

				// open central database
				$this->load->database();

				// Save tenant details in central Database
				$data = array(
					'tenant_id' => $subdomainName,
					'company_name' => $companyName,
					'company_email' => $email,
					'phone' => $phone,
					'subdomain_name' => $subdomainName,
					'db_name' => $mysql_database,
				);

				$this->db->insert('tenants', $data);

				return true;

			} catch (\Throwable $th) {
				$this->session->set_flashdata('feedback','An Error occurred, please try again');
				redirect(base_url() . 'register', 'refresh');
				// throw $th;
			}
		}else{
			$this->session->set_flashdata('feedback','An Error occurred, please try again');
			redirect(base_url() . 'register', 'refresh');
		}
	}

}