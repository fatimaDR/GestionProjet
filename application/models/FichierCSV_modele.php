<?php
 
 class FichierCSV_modele extends CI_Model{

function __construct() {

parent::__construct();

    }
public function donneesToCsv() {
 
  return $this->db->order_by('Nom_Projet')
              ->get('creationprojet');
      
   }


}