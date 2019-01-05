<?php

class GestionProjet_model extends CI_Model{

// Function To Fetch All Students Record
function show_projets(){
$query = $this->db->get('projet');
$query_result = $query->result();
return $query_result;
}
// Function To Fetch Selected Student Record
function show_projet_id($data){
$this->db->select('*');
$this->db->from('projet');
$this->db->where('projetID', $data);
$query = $this->db->get();
$result = $query->result();
return $result;
}
// Update Query For Selected Student
function update_projet_id1($id,$data){
$this->db->where('projetID', $id);
$this->db->update('projet', $data);
}

   }
?>
