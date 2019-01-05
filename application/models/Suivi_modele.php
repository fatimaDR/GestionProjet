
<?php

class Suivi_modele extends CI_Model{

function __construct() {

parent::__construct();

    }

function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('suivi', $data);
     }

function getAffectationId(){
 	
 	 $query = $this  -> db -> get("affectation");
        
        return $query->result();
 }
   function show_charge(){
 
  $query = $this->db->get('taches');
  $query_result = $query->result();
  return $query_result;
}

  }


?>
