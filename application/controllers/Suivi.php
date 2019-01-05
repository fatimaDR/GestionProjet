<?php

class Suivi extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->library('form_validation');
$this->load->helper('form');
$this->load->model('Suivi_modele');

}

function index() {

//redirect('AfficherSuivi');

}

function CreationSuivi($id){
$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

$this->form_validation->set_rules('dCharge', 'Charge initial');

$query = $this->Suivi_modele->show_charge();
$data['taches'] = $query; 
$data['id']=$id;
//$this->load->view('SuiviView', $data);
//var_dump($data);
$this->form_validation->set_rules('dReste', 'Reste');

$this->form_validation->set_rules('dTravail', 'Travail');

$this->form_validation->set_rules('dDateSuivi', 'date de suivi');

$this->form_validation->set_rules('dIdAffectation', 'Affectation de ressource');


$query=$this->Suivi_modele->getAffectationId();
$data['affectations'] = $query;
$this->load->view('SuiviView',$data);
$this->form_validation->set_rules('dTAvancement', 'Taux avancement');

if ($this->form_validation->run() == FALSE) {
   $this->load->view('connexion_echoue');
} else {


$data3 = array(
'réalisation' => $this->input->post('dCharge'),
'Reste' => $this->input->post('dReste'),
'Travail' => $this->input->post('dTravail'),
'date' => date("Y-m-d", strtotime($this->input->post('dDateSuivi'))),
'affectationID' => intval($this->input->post('dIdAffectation')),
'Taux-avancement' => intval($this->input->post('dTAvancement')),
);

var_dump($data3);
$this->Suivi_modele->form_insert($data3);
redirect('AfficherSuivi');

}

}

}