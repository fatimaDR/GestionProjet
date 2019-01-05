<?php

class CreationTache_model extends CI_Model{

function __construct() {

parent::__construct();

    }

function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('taches', $data);
     }

 function getProjetId(){
 	
 	 $query = $this  -> db -> get("projet");
        
        return $query->result();
 }
   }


?>
