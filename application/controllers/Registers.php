<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registers extends CI_Controller {

	public function __contruct(){
		parent:: __construct;
		$this->load->model('My_Student');
	}
	public function index(){
		$this->load->view('templates/frontbar');
		$this->load->view('Register');
	}

	public function enrol(){
		$this->load->helper('form', 'url');
		$this->load->library('form_validation');
		$this->load->model('My_Student');

	}
}
?>