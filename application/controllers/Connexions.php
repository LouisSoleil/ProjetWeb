<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connexions extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('My_User');
	}
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('Connexion');
	}
}
?>