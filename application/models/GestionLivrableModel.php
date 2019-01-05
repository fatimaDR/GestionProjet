<?php

class GestionLivrableModel extends CI_Model{

function __construct() {

parent::__construct();

    }

function getLivrable(){
// Inserting in Table(students) of Database(college)
$query = $this  -> db -> get("livrable");
return $query->result();
      }

   function form_insert($data){

   	$this->db->insert('livrable', $data);
   }   

  function getCategorie() {

   $query = $this  -> db -> get("catégories");
        
        return $query->result();
  }

  function getProjet(){

  $query = $this  -> db -> get("projet");
        
        return $query->result();
  }

  function show_livrables(){
 
  $query = $this->db->get('livrable');
  $query_result = $query->result();
  return $query_result;
}

  function show_livrable_id($data){

  $this->db->select('*');
  $this->db->from('livrable');
  $this->db->where('lIVRABLEID', $data);
  $query = $this->db->get();
  $result = $query->result();
  return $result;
 }

   function supprimerLivrable($id)
  {
   $this->db->where('lIVRABLEID', $id);
   $this->db->delete('livrable');
  
  }

  function update_livrable_id1($id,$data){
$this->db->where('lIVRABLEID', $id);
$this->db->update('livrable', $data);
}

   }
?>