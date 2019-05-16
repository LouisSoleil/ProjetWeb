<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rankings extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('My_User', 's');
	}

	public function index(){
		$data['students'] = $this->s->get_user();
		$this->load->view('templates/header');
		$this->load->view('Ranking', $data);
	}


}
?>