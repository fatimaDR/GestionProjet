<?php

class AfficherProjet extends CI_Controller {

function __construct() {
parent::__construct();

$this->load->model('AfficheProjetModel');

}

function index() {

//$this->load->library('table');
$this->load->helper('form');
$query=$this->AfficheProjetModel->getproject();
//var_dump($query);

$data['projets'] = $query;

$this->load->view('AfficherProjet_view',$data);

//redirect('CreationProjet', 'refresh');

}

}