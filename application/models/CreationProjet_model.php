
<?php

class CreationProjet_model extends CI_Model{

function __construct() {

parent::__construct();

    }

function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('projet', $data);
      }

 /*function getChefProjet(){
  
  $query = $this  -> db -> get("chef_projet");
        
        return $query->result();

 }
*/
 function getDepartement(){

$query = $this  -> db -> get("departement");
        
        return $query->result();
 }
 
   }
?>
