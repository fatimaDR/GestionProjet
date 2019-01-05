<?php

class Inscription extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('inscription_model');
$this->load->library('form_validation');
}
function index() {
//Including validation library


$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('dage', 'Age');

$this->form_validation->set_rules('dnom', 'Nom');

$this->form_validation->set_rules('dprenom', 'Prenom');

$this->form_validation->set_rules('demail', 'email', 'required|valid_email');

$this->form_validation->set_rules('dPassword', 'Password', 'required|min_length[5]|max_length[15]');

//Validating Mobile no. Field
if ($this->form_validation->run() == FALSE) {
$this->load->view('exemple');
} else {
//Setting values for tabel columns 
  /*  $name = $this->input->post('name');
    $age = $this->input->post('age');       
    $data = array(
       'name' => $this->input->post('name'),
       'age' => $this->input->post('age'),
*/
$data = array(
'age' => $this->input->post('dage'),
'nom' => $this->input->post('dnom'),
'prenom' => $this->input->post('dprenom'),
'mail' => $this->input->post('demail'),
'password' => $this->input->post('dPassword'),



);
var_dump($data);
//Transfering data to Model
$this->inscription_model->form_insert($data);
$this->load->view('inscription_view');
}
}

}

?>