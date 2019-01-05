<?php

use Dhtmlx\Connector\GanttConnector;
//use lib\dhtmlxGantt\codebas\GanttConnector;

class Gantt extends CI_Controller {

function index() {


$this->load->view("GanttView");

}

public function data(){                                                     
        $this->load->database(); // data feed                                   
 
        $controller = new GanttConnector($this->db, "gestion_projet");                   
        $controller->render_links("gantt_links", "id", "source,target,type");   
        $controller->render_table(                                              
            "taches",                                                      
            "tachesID",                                                               
            "Date_debut,Duree,nom,createur,Date_fin,projetID"                             
       );                                                                       
    }  
}