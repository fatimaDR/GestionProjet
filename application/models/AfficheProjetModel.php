<?php

class AfficheProjetModel extends CI_Model{

function __construct() {

parent::__construct();

    }

function getproject(){
// Inserting in Table(students) of Database(college)
$query = $this  -> db -> get("projet");
return $query->result();
      }
   }
?>