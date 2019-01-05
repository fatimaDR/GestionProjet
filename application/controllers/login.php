<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

function _construct(){
        
        parent::_construct();

        
    }

    function index(){


        $this->load->helper(array('form'));
        $this->load->view('login_view');
        
    }
}

?>