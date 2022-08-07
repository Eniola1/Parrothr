 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification {
    protected $CI;

    public function __construct()
    {
            // Assign the CodeIgniter super-object
            $this->CI =& get_instance();
            $this->CI->load->model('employee_model'); 
            $this->CI->load->model('notification_model');  
            // $this->CI->load->helper('url');
            // $this->CI->config->item('base_url');
            // $this->CI->load->library('session');
    }

    public function sendNotification($receiver_id, $title, $rel_url){

        $notificationData = array(
            'title' => $title,
            'receiver_id' => $receiver_id,
            'rel_url' => $rel_url,
        );
        $this->CI->notification_model->addNotification($notificationData);
        // $receipient = $this->CI->employee_model->emselectByCode($receiver_id);

        // $this->sendEmail($receipient->em_email, $title, $rel_url);
    }
    
    public function sendGroupNotification(array $receiver_ids, $title, $rel_url){

        $receipients = [];
        foreach ($receiver_ids as $receiver_id) {
            $notificationData = array(
                'title' => $title,
                'receiver_id' => $receiver_id,
                'rel_url' => $rel_url,
            );
            $this->CI->notification_model->addNotification($notificationData);
            $receipient = $this->CI->employee_model->emselectByCode($receiver_id);
            array_push($receipients, $receipient->em_email);
        }

        // foreach ($receipients as $receipientEmail) {
        //     $this->sendEmail($receipientEmail, $title, $rel_url);
        // }
    }

    public function sendNewUserNotification(array $receiver_ids, $title, $password, $rel_url= 'dashboard/overview'){
        $receipients = [];
        foreach ($receiver_ids as $receiver_id) {
            $notificationData = array(
                'title' => $title,
                'receiver_id' => $receiver_id,
                'rel_url' => $rel_url,
            );
            $this->CI->notification_model->addNotification($notificationData);
            $receipient =  $this->CI->employee_model->emselectByCode($receiver_id);
            array_push($receipients, $receipient->em_email);
        }
        
        // foreach ($receipients as $receipientEmail) {
        //     $this->sendNewUserEmail($receipientEmail, $title, $password, $rel_url);
        // }
    }

    
    public function sendEmail($receipientEmail, $title, $rel_url){
        $this->CI->load->library('email');

        $this->CI->email->from('noreply@parrothr.com.ng', 'ParrotHR');
        $this->CI->email->to($receipientEmail);

        $this->CI->email->subject($title);

        $mailBody = 
        `<html>
            <style>
                *{
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }
                body{
                    height: 100vh;
                }
                
                .container{
                    background-color: #130444;
                    /* min-height: calc(100% - 50px); */
                    height: 100%;
                    width: 100%;
                }
                
                header{
                    width: 100%;
                    height: 250px;
                    background-color: #e9e9e9;
                    margin: auto;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                nav > img{
                    width: 150px;
                    height: auto;
                    max-inline-size: 100%;
                    block-size: auto;
                    object-fit: contain;
                    margin-bottom: 50px;
                }
                main{
                    width: 100%;
                    height: auto;
                    max-width: 576px;
                    margin: auto;
                    background-color: white;
                    padding: 50px 80px;
                    position: relative;
                    top: -70px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }
                main > h2{
                    margin-bottom: 30px;
                }
                main > p{
                    text-align: justify;
                    font-size: 14px;
                }
                main > button{
                    width: 150px;
                    height: 50px;
                    border: none;
                    outline: none;
                    background-color: #1E007F;
                    color: #fff;
                    margin-top: 60px;
                    cursor: pointer;
                }
                
                main > button:hover{
                    border: 1px dashed #fff;
                }
                footer{
                    height: 50px;
                    background-color: #e9e9e9;
                    position: relative;
                    display: flex;
                    align-items: center;
                    padding: 0 20px;
                }
                
                @media (max-width: 425px){
                    main{
                        max-width: 576px;
                        height: auto;     
                        padding: 20px 50px;  
                    }
                main > p{
                    text-align: left;
                }
                main > button{
                width: 100%;
                }
                }
            </style>
            <body>
                <div class="container">
                    <header>
                        <nav>
                            <img src="`.base_url().`assets/images/pl.ng" alt="">
                        </nav>
                    </header>
                    <main>
                        <h2>`.ucwords($title).`</h2>
                        <form action="`.base_url().$rel_url.`">
                            <button>View</button>
                        </form>
                        <div style="height: 2px;background-color: #eee;width: 100%;"></div>
                        <span style="margin-top: 50px; font-size: 12px;">&copy; Copyright 2022. Parrot HR</span>
                    </main>
                </div>
            </body>
        </html>`;

        $this->CI->email->message($mailBody);

        $this->CI->email->send();
        echo $this->CI->email->print_debugger();
    }
    
    public function sendNewUserEmail($receipientEmail, $title, $password, $rel_url){
        $this->CI->load->library('email');

        $this->CI->email->from('chukajide@gmail.com', 'ParrotHR');
        $this->CI->email->to($receipientEmail);

        $this->CI->email->subject($title);
        $mailBody = 
        `<html>
            <style>
                *{
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }
                body{
                    height: 100vh;
                }
                
                .container{
                    background-color: #130444;
                    /* min-height: calc(100% - 50px); */
                    height: 100%;
                    width: 100%;
                }
                
                header{
                    width: 100%;
                    height: 250px;
                    background-color: #e9e9e9;
                    margin: auto;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                nav > img{
                    width: 150px;
                    height: auto;
                    max-inline-size: 100%;
                    block-size: auto;
                    object-fit: contain;
                    margin-bottom: 50px;
                }
                main{
                    width: 100%;
                    height: auto;
                    max-width: 576px;
                    margin: auto;
                    background-color: white;
                    padding: 50px 80px;
                    position: relative;
                    top: -70px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }
                main > h2{
                    margin-bottom: 30px;
                }
                main > p{
                    text-align: justify;
                    font-size: 14px;
                }
                main > button{
                    width: 150px;
                    height: 50px;
                    border: none;
                    outline: none;
                    background-color: #1E007F;
                    color: #fff;
                    margin-top: 60px;
                    cursor: pointer;
                }
                
                main > button:hover{
                    border: 1px dashed #fff;
                }
                footer{
                    height: 50px;
                    background-color: #e9e9e9;
                    position: relative;
                    display: flex;
                    align-items: center;
                    padding: 0 20px;
                }
                
                @media (max-width: 425px){
                    main{
                        max-width: 576px;
                        height: auto;     
                        padding: 20px 50px;  
                    }
                main > p{
                    text-align: left;
                }
                main > button{
                width: 100%;
                }
                }
            </style>
            <body>
                <div class="container">
                    <header>
                        <nav>
                            <img src="`.base_url().`assets/images/pl.ng" alt="">
                        </nav>
                    </header>
                    <main>
                        <h2>`.ucwords($title).`</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, sapiente aperiam recusandae aliquid, esse dolorum maiores error itaque culpa blanditiis aspernatur quod totam architecto aut expedita assumenda nihil harum nesciunt obcaecati corporis sequi officiis quia. Numquam, nobis accusamus quisquam, illum praesentium et modi aperiam debitis hic ratione delectus porro autem in iusto. </p>
                        <button>View</button>
                        <div style="height: 2px;background-color: #eee;width: 100%;"></div>
                        <span style="margin-top: 50px; font-size: 12px;">&copy; Copyright 2022. Parrot HR</span>
                    </main>
                </div>
                <!-- <footer>&copy; Copyright 2022. Parrot HR</footer> -->
            </body>
        </html>`;
        
        $this->CI->email->message($mailBody);

        $this->CI->email->send();
        // echo $this->CI->email->print_debugger();
    }

}
