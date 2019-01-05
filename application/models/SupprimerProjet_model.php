<?php
class SupprimerProjet_model extends CI_Model{
// Function to select all from table name students.
function show_projets(){
$query = $this->db->get('projet');
$query_result = $query->result();
return $query_result;
}
// Function to select particular record from table name students.
function show_projet_id($data){
$this->db->select('*');
$this->db->from('projet');
$this->db->where('projetID', $data);
$query = $this->db->get();
$result = $query->result();
return $result;
}
  function supprimerProjet($id)
	{
   $this->db->where('projetID', $id);
   $this->db->delete('projet');
  
	}

}
?> 