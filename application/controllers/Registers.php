<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registers extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('My_Game');
	}
	public function index(){
		$data['years'] = $this->My_Game->get_year();
		$this->load->view('templates/header');
		$this->load->view('Register', $data);
	}
}
?>