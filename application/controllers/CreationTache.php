<?php

class CreationTache extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('CreationTache_model');
$this->load->library('form_validation');
}
function index() {
//Including validation library


$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

$this->form_validation->set_rules('dCreateurTache', 'Createur du tache');

$this->form_validation->set_rules('dDateDebutTache', 'Date debut du tache');

$this->form_validation->set_rules('dDateFinTache', 'Date fin du tache');

$this->form_validation->set_rules('dNomTache', 'Nom du tache');

$this->form_validation->set_rules('dDureeTache', 'Duree du tache');

//$this->form_validation->set_rules('dIdProjet', 'Id du projet');

$query=$this->CreationTache_model->getProjetId();
$data['projets'] = $query;
$this->load->view('CreationTache_view', $data); 

if ($this->form_validation->run() == FALSE) {
   $this->load->view('connexion_echoue');
} else {


$data2 = array(
'createur' => $this->input->post('dCreateurTache'),
'Date_debut' => date("Y-m-d", strtotime($this->input->post('dDateDebutTache'))),
'Date_fin' => date("Y-m-d", strtotime($this->input->post('dDateFinTachet'))),
'nom' => $this->input->post('dNomTache'),
'Duree' => $this->input->post('dDureeTache'),
'projetID' => intval($this->input->post('dIdProjet')),
);
var_dump($data2);



$this->CreationTache_model->form_insert($data2);
//$this->load->view('CreationTache_view');
redirect('AfficherTaches');
}
}

}

?>