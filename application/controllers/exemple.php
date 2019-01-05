<?php

class exemple extends CI_Controller {


function __construct(){

    parent::__construct();
$this->load->model('exempleModel');
}

function index() {

$this->load->view('exemple');


} 


}
 
}