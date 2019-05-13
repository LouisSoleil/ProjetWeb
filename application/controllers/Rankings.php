<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rankings extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('My_Student', 's');
	}

	public function index(){
		$data['students'] = $this->s->get_student();
		$this->load->view('templates/frontbar');
		$this->load->view('Ranking', $data);
	}


}
?>