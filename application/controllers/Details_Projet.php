<?php

class Details_Projet extends CI_Controller {

function __construct() {
parent::__construct();

$this->load->model('Details_Projet_model');

}

function index() {

//$this->load->library('table');
$this->load->helper('form');
$query=$this->Details_Projet_model->getproject();
//var_dump($query);

$data['projets'] = $query;

$this->load->view('Details_Projet_view',$data);

//redirect('CreationProjet', 'refresh');

}

function afficherProjet($projet) {

$data=array();
//$this->load->library('table');
$query=$this->Details_Projet_model->getDetailleparprojet($projet);
//var_dump($query);

$data['projets'] = $query;

$this->load->view('Details_Projet_view',$data);

//redirect('CreationProjet', 'refresh');

}

}