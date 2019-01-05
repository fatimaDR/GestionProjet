<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeModele extends CI_Model
{

protected $table = 'test';

/**
	 *	Ajoute une news
	 *
	 *	@param string $nom 	Le enom de l'\utilisateur
	 *	@param string $prenom 	Le prenom de l'\utilisateur
	 *	@param string $age 	L'\age de l'\utilisateur
	 *	@return bool		Le résultat de la requête
	 */
public function getuser()
	{
		

	$query = $this->db->get('test');

           foreach ($query->result() as $row)
{
    echo $row->nom.'<br />';
    echo $row->prenom.'<br />';
    echo $row->age.'<br />';
}   
    
    
}


	public function ajouter_user($id,$nom, $prenom, $age)
	{
		$data = array(
	 'id'=>$id,
     'nom'=>$nom ,
     'prenom'=>$prenom ,
     'age'=>$age 
     );
    
    $this->db->insert('test', $data); 
	
	}
	
	/**
	 *	Édite une news déjà existante
	 */
	public function editer_user()
	{
		$this->db->set('nom', 'hhhhhhh');
        $this->db->where('id', 2);
        $this->db->update('test');
	}
	
	/**
	 *	Supprime une news
	 */
	public function supprimer_user($id)
	{
		$this->db->delete('test', array('id' => $id));
	}

	
	/**
	 *	Retourne une liste de news
	 */
	public function liste_user()
	{
		 
	}

}