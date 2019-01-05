<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GererUser extends CI_Model{

protected $table = 'utilisateurs';

public function supprimerUser($utilisateursID)
	{
		$this->db->delete('utilisateurs', array('utilisateursID' => $utilisateursID));
	}

public function EditerUser()
	{
		$this->db->set('prenom', 'fatima');
        $this->db->where('utilisateursID', 1);
        $this->db->update('utilisateurs');
	} 

}