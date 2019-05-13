<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('My_Game', 'g');
	}

	public function index(){
		$data['years'] = $this->g->get_year();
		$data['subjects'] = $this->g->get_subject();
		$data['finals'] = $this->g->get_finals();
		$this->load->view('templates/header');
		$this->load->view('Game', $data);
	}
}
?>