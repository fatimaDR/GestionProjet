<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller {

	function index()
	{
		$data = array(
				3  => 'Draft Robot Plans',
				7  => 'Delivery of Robot Parts',
				13 => 'Construction Finished',
				26 => 'Kill All Humans!'
		);

		$this->load->library('calendar');

		$vars['calendar'] = $this->calendar->generate('', '', $data);

		$this->load->view('calendar', $vars);
	}
}

/* End of file calendar.php */
/* Location: ./application/controllers/calendar.php */