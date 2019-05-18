<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class addUgames extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('My_Game');
		$this->load->model('My_Cookie');
	}
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('addUgame');
	}
}
?>