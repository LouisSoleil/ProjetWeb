<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rankings extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('My_Student', 'm');
	}

	public function index(){
		$data['students'] = $this->m->get_student();
		$this->load->view('templates/frontbar');
		$this->load->view('Ranking', $data);
	}


}
?>