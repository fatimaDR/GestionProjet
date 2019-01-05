<?php



class ModifierUser extends CI_Controller
{
	

	public function __construct()
	{
		parent::__construct();

		$this->load->model('GererUser');
		
	}
	public function index()
	{
	
		$this->EditerUser();
	}

	public function EditerUser()
	{

        $this->load->model('GererUser');

	    $resultat = $this->GererUser->EditerUser(1);


	    var_dump($resultat);


	}	
	
	

	
}