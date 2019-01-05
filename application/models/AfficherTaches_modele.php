<?php
class AfficherTaches_modele extends CI_Model {

    function __construct() {

parent::__construct();

    }

    
    function getProjet() {

        $query = $this  -> db -> get("projet");
        
        return $query->result();
    }
}