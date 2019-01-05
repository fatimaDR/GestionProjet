<?php

class exempleModel extends CI_Model{

function __construct() {
parent::__construct();

}

function show_tache_ch(){
$query = $this->db->get('taches');
 $query_result = $query->result();
  return $query_result;
}

function show_taches($data){
$this->db->select('*');
$this->db->from('taches');
$this->db->where('tachesID', $data);
$query = $this->db->get();
$result = $query->result();
return $result;
}

function update_ch_id1($id,$data){

}	

} 			