<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Users extends CI_Controller {
		public function __construct(){
			parent:: __construct();
			$this->load->model('My_User');
		}

		function create(){
			$this->My_User->create_user();
			$this->load->view('templates/header');
			$this->load->view('Connexion');
		}
	}
?>