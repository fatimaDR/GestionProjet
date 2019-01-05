<?php
class AfficherTaches extends CI_Controller  {

	function __construct() {
parent::__construct();

$this->load->model('AfficherTaches_modele');

}

    function index(){

      $this->dynamic_combobox();
}
 
    function dynamic_combobox(){
     // retrieve the album and add to the data array
        //$this->load->model('AfficherTaches_modele');
      $query=$this->AfficherTaches_modele->getProjet();
//var_dump($query);
        $data['projets'] = $query;
        $this->load->view('AfficherTaches_view', $data);

       //var_dump($data);
   }

}