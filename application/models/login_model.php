
<?php

class login_model extends CI_Model{

function logintest($username, $password){
    $this -> db -> select('utilisateursID, mail, password');
    $this -> db -> from ('utilisateurs');
    $this -> db -> where ('mail', $username);
    $this -> db -> where ('password', $password);
    $this -> db -> limit(1);

    $query = $this  -> db -> get();
     

    if($query -> num_rows() == 1){
       return $query->result();


    }
    else
        
   {
        return false ;
  
   }
   
 }
   }
?>