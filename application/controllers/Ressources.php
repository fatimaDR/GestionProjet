<?php

class Ressources extends CI_Controller {

function __construct() {
parent::__construct();

$this->load->model('RessourceModel');;


}


function index(){

$this->load->helper('form');
$query = $this->RessourceModel->getutilisateur();
//var_dump($query);

$data['utilisateur'] = $query;

$this->load->view('Ressources_view',$data);
}





}
