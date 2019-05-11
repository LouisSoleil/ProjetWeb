<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('My_Game', 'm');
	}

	public function index(){
		$data['sectors'] = $this->m->get_sector();
		$data['years'] = $this->m->get_year();
		$data['subjects'] = $this->m->get_subject();
		$data['finals'] = $this->m->get_finals();
		$this->load->view('templates/frontbar');
		$this->load->view('Game', $data);
	}
}
?>