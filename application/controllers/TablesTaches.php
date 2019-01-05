<?php

class TablesTaches extends CI_Controller {

function __construct() {
parent::__construct();

$this->load->model('TablesTaches_modele');

}

function index() {


//$this->load->library('table');
$this->load->helper('form');
$query=$this->TablesTaches_modele->getTache();
//var_dump($query);

$data['Taches'] = $query;

$this->load->view('TablesTaches_view',$data);

//redirect('CreationProjet', 'refresh');

}

function afficherTaches($project) {

$data=array();
//$this->load->library('table');
$this->load->helper('form');
$query=$this->TablesTaches_modele->getTacheparprojet($project);
//var_dump($query);

$data['Taches'] = $query;

$this->load->view('TablesTaches_view',$data);

//redirect('CreationProjet', 'refresh');

}

}