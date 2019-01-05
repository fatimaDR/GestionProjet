<?php

class CreationProjet extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('CreationProjet_model');
$this->load->library('form_validation');
}
function index() {
//Including validation library


  $this->form_validation->set_error_delimiters('<div class="error">', '</div>');


$this->form_validation->set_rules('dBudget', 'Budget du projet','trim|required|xss_clean');

$this->form_validation->set_rules('dDateDebut', 'Date debut du projet');

$this->form_validation->set_rules('dDateFin', 'date fin du projet');

$this->form_validation->set_rules('dNom', 'Nom du projet','trim|required|xss_clean');

$this->form_validation->set_rules('dDescription', 'Description du projet','trim|required|xss_clean');

$this->form_validation->set_rules('dDepartementProjet', 'Departement du projet');

$query=$this->CreationProjet_model->getDepartement();
//var_dump($query);
        $data['departements'] = $query;
        $this->load->view('CreationProjet_view', $data); 

$this->form_validation->set_rules('dChefProjet', 'Chef du projet');

  if ($this->form_validation->run() == FALSE) {
     $this->load->view('connexion_echoue');
  }
  else 
   {
     $data = array(
'budget' => $this->input->post('dBudget'),
'date_debut' =>  date("Y-m-d", strtotime($this->input->post('dDateDebut'))),
'date_fin' => date("Y-m-d", strtotime($this->input->post('dDateFin'))),
'nom' => $this->input->post('dNom'),
'description' => $this->input->post('dDescription'),
'departementID' => intval($this->input->post('dDepartementProjet')),
'chef_Projet' => $this->input->post('dChefProjet'),
);
      $this->CreationProjet_model->form_insert($data);
      redirect('AfficherProjet');
    } 
}


}
?>