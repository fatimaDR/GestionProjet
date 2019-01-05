<?php

class Details_Projet_model extends CI_Model{

function __construct() {

parent::__construct();

    }

function getproject(){
// Inserting in Table(students) of Database(college)
$query = $this  -> db -> get("projet");
return $query->result();
      }

  function getDetailleparprojet($projet){
  $query = $this -> db -> select ('*')
-> from ( 'projet')
-> where ('projetID ', $projet) 
-> get();

return $query->result();
  }
   }

?>