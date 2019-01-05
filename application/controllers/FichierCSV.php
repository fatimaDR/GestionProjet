<?php
 
class FichierCSV extends CI_Controller {

function __construct() {
parent::__construct();

$this->load->model('FichierCSV_modele');

}

function index(){

 $this->csv_file();
}
public function csv_file(){
 
 $this->load->dbutil();
 $this->load->helper('file');
 $result = $this->FichierCSV_modele->donneesToCsv();
 $delimiter = ",";
 $newline = "\r\n";
 $csv = $this->dbutil->csv_from_result($result, $delimiter, $newline);
 
 if (!write_file('C:\file.csv', $csv))
  {
   echo 'Un problème est survenu lors de la génération du fichier CSV';
   }
  else
   {
  echo 'Le fichier CSV a bien fait';
    }

//https://jqueryui.com/datepicker/
//http://www.blogdevphp.fr/categorie/codeigniter

}

}