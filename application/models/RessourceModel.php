<?php

class RessourceModel extends CI_Model{

function __construct() {

parent::__construct();

    }

function getutilisateur(){
// Inserting in Table(students) of Database(college)
$query = $this  -> db -> get("utilisateurs");
return $query->result();
      }
   }
?>