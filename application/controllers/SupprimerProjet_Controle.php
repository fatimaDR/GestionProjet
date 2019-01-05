<?php

class SupprimerProjet_Controle extends CI_Controller {

function __construct(){
parent::__construct();
$this->load->model('SupprimerProjet_model');
}
 function index(){

      $this->show_projet_id();
}
function show_projet_id($id) {
//$id = $this->uri->segment(3);
$data['projets'] = $this->SupprimerProjet_model->show_projets();
$data['single_projet'] = $this->SupprimerProjet_model->show_projet_id($id);
$this->load->view('SupprimerProjetVue', $data);
}
 function supprimerProjet($id){ 

 $this->SupprimerProjet_model->supprimerProjet($id);

 $this->show_projet_id($id);
 redirect('AfficherProjet');

 }
}
?>