<?php



class HomeControle extends CI_Controller
{
	

	public function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{
	
		$this->accueil();
	}

	public function accueil()
	{

        $this->load->model('HomeModele');

	    $resultat = $this->HomeModele->supprimer_user(5);

	    var_dump($resultat);

		/*$data = array();
		$data['pseudo'] = 'Fatima';
		$data['email'] = 'email@fatima.fr';
		$data['en_ligne'] = true;  

		 $this->load->view('HomeView');
		  
	 */
  }
	
	public function bonjour($pseudo='')
	{
		echo 'Salut a toi:'.$pseudo ;
	}

	public function manger($plat ='', $boisson ='')
	{
		echo 'Voici votre menu : <br />';
		echo $plat . '<br />';
		echo $boisson . '<br />';
		echo 'Bon appetit !';
	}
}


/*  class HomeControle extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		
		//	Décommenter cette ligne pour charger le helper url
		//$this->load->helper('url');
	}

	public function index()
	{
		redirect(array('error', 'probleme'));
	}

	public function secret()
	{
		echo "hello";
	}

	public function accueil()
	{
		$this->load->view('HomeView');
	}


public function connexion()
   {
	//	Chargement de la bibliothèque
	$this->load->library('form_validation');
	
	if($this->form_validation->run())
	{
		//	Le formulaire est valide
		$this->load->view('HomeView');
	}
	else
	{
		//	Le formulaire est invalide ou vide
		$this->load->view('connexion_echoue');
	}

  } 
}
*/