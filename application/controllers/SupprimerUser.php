<?php



class SupprimerUser extends CI_Controller
{
	

	public function __construct()
	{
		parent::__construct();

		$this->load->model('GererUser');
		
	}
	public function index()
	{
	
		$this->SupprimerUser();
	}

	public function SupprimerUser()
	{

        $this->load->model('GererUser');

	    $resultat = $this->GererUser->supprimerUser(1);


	    var_dump($resultat);


	}	
	
	

	
}