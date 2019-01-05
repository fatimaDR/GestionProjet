<?php

class TablesTaches_modele extends CI_Model{

function __construct() {

parent::__construct();

    }

function getTache(){
// Inserting in Table(students) of Database(college)
//$query = "select createur,Date_debut,Date_fin,nom,Duree from taches where taches.projetID = projet.projetID";
$query = $this  -> db -> get("taches");

//$query = "select * from taches where projet.projetID=projetID";
return $query->result();
//$resultat=mysql_query($query);
     }

function getTacheparprojet($project){

$query = $this -> db -> select ('*')
-> from ( 'taches')
-> where ('taches.projetID ', $project) 
-> get();

return $query->result();

     }

   }


?>