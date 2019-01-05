<?php
     
       
class Accueil extends CI_Controller {

    function __construct() {
        parent::__construct();
        // path to simple_html_dom 
    }

   function index() {
     
     $this->load->view('page_php');
     
    }
    function projet() {

        $this->load->view('page_php');

      
    }

    function tache() {
        $this->load->view('page_css');
    }

    function ressource() {
        $this->load->view('page_javascript');
    }

    function departement() {
        $this->load->view('page_codeigniter');
    }

    function calendrier() {
        $this->load->view('page_html5');
    }

    function document() {
        $this->load->view('page_mysql');
    }

    function lien() {
        $this->load->view('page_mailget');
    }
 function suiviRH() {
        $this->load->view('page_others');
    }

}

?>