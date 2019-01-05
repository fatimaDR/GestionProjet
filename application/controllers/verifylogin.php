<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifylogin extends CI_Controller
{

function _construct(){
    parent::_construct();
    $this->load->model('login_model');
}


function index(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

    if($this->form_validation->run() == FALSE){
        //Validation failed, user redirected to login page...
        $this->load->view('inscription_view');
    }
    else{
        //Login success. Go to members only area
        redirect('Accueil', 'refresh');
    }
}


function check_database($password){
    //Field validation succeeded. Validate against db
    $username = $this->input->post('mail');
    //query db
    $result =  $this->load->model('login_model'); 
    $result = $this->login_model->logintest($username, $password);

    if($result){
        /*$sess_array = array();
        foreach($result as $row){
            $sess_array = array(
                    'Student_id' => $row->id,
                    'Student_Email' => $row->username
                );
            //$this->session->set_userdata('logged_in', $sess_array);
        }*/

        $this->load->view('login_view');
        return TRUE;


    }
    else{
        $this->form_validation->set_message('check_database', 'Invalid username or password');

        $this->load->view('connexion_echoue');

        return false;
    }




 }

}