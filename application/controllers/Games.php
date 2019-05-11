<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('My_Game', 'm');
	}

	public function index(){
		$data['filieres'] = $this->m->get_filiere();
		$data['years'] = $this->m->get_year();
		$this->load->view('templates/frontbar');
		$this->load->view('Game', $data);
	}
}
?>