<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registers extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('My_Student');
		$this->load->model('My_Game','m');
	}
	public function index(){
		$data['years'] = $this->m->get_year();
		$this->load->view('templates/header');
		$this->load->view('Register', $data);
	}

	public function enrol(){
		$this->load->helper('form', 'url');
		$this->load->library('form_validation');
		$this->load->model('My_Student');

	}
}
?>