<?php

class GestionProjet extends CI_Controller {

function __construct(){
parent::__construct();
$this->load->model('GestionProjet_model');
}
 function index(){

      $this->show_projet_id();
}

function show_projet_id() {
$id = $this->uri->segment(3);
$data['projets'] = $this->GestionProjet_model->show_projets();
$data['single_projet'] = $this->GestionProjet_model->show_projet_id($id);
$this->load->view('GestionProjetVue', $data);
}
function update_projet_id1() {
$id= $this->input->post('did');
$data = array(
'budget' => $this->input->post('dBudget'),
'date_debut' => date("Y-m-d", strtotime($this->input->post('dDateDebut'))),
'date_fin' => date("Y-m-d", strtotime($this->input->post('dDateFin'))),
'nom' => $this->input->post('dNom'),
'description' => $this->input->post('dDescription'),
'departementID' => intval($this->input->post('dDepartementProjet')),
'chef_Projet' => $this->input->post('dChefProjet'),
);
$this->GestionProjet_model->update_projet_id1($id,$data);
$this->show_projet_id();
 redirect('AfficherProjet');
}


}
?>