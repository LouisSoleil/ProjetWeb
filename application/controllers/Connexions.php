<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connexions extends CI_Controller {

	public function __contruct(){
		parent:: __construct;
		$this->load->model('My_Student');
	}
	public function index(){
		$this->load->view('templates/frontbar');
		$this->load->view('Connexion');
	}
}
?>