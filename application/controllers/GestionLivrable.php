<?php

class GestionLivrable extends CI_Controller {

function __construct() {
parent::__construct();

$this->load->model('GestionLivrableModel');
$this->load->library('form_validation');
}

function index() {

//$this->load->library('table');

}

function AfficherLivrable(){

$this->load->helper('form');
$query=$this->GestionLivrableModel->getLivrable();
//var_dump($query);

$data['livrables'] = $query;

$this->load->view('AfficherLivrable_view',$data);
}


function CreationLivrable(){

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

$this->form_validation->set_rules('dDateLivraison', 'Date du livraison','trim|required|xss_clean');

$this->form_validation->set_rules('dDescription', 'Description du livraison');

$this->form_validation->set_rules('dCategorie', 'Categorie du livraison');
$query=$this->GestionLivrableModel->getCategorie();
//var_dump($query);
$data['categories'] = $query;
       

$this->form_validation->set_rules('dProjet', 'Titre du projet');
$query=$this->GestionLivrableModel->getProjet();
//var_dump($query);
        $data['projetsid'] = $query;
        $this->load->view('CreationLivrable_view', $data); 

  if ($this->form_validation->run() == FALSE) {
     $this->load->view('connexion_echoue');
  }
  else 
   {
     $data = array(
'Date_livraison' => date("Y-m-d", strtotime($this->input->post('dDateLivraison'))),
'Description' =>  $this->input->post('dDescription'),
'catégoriesID' => intval($this->input->post('dCategorie')),
'projetID' => intval($this->input->post('dProjet')),
);
      $this->GestionLivrableModel->form_insert($data);
      redirect('GestionLivrable/AfficherLivrable');
    } 
}

function show_livrable_id($id) {
//$id = $this->uri->segment(3);
$data['livrables'] = $this->GestionLivrableModel->show_livrables();
$data['single_livrable'] = $this->GestionLivrableModel->show_livrable_id($id);
$this->load->view('SupprimerLivrableVue', $data);
}

function supprimerLivrable($id){ 

 $this->GestionLivrableModel->supprimerLivrable($id);

 $this->show_livrable_id($id);
 redirect('GestionLivrable/AfficherLivrable');

 }

 function show_livrable_id2($id) {
//$id = $this->uri->segment(3);
$data['livrables'] = $this->GestionLivrableModel->show_livrables();
$data['single_livrable2'] = $this->GestionLivrableModel->show_livrable_id($id);
$this->load->view('ModiffierLivrableVue', $data);
}

 function update_livrable_id1() {
$id= $this->input->post('did');
$data = array(
'Date_livraison' => date("Y-m-d", strtotime($this->input->post('dDateLivraison'))),
'Description' =>  $this->input->post('dDescription'),
'catégoriesID' => intval($this->input->post('dCategorie')),
'projetID' => intval($this->input->post('dProjet')),
);
$this->GestionLivrableModel->update_livrable_id1($id,$data);
$this->show_livrable_id2($id);
 redirect('GestionLivrable/AfficherLivrable');
}
}