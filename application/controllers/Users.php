<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Users extends CI_Controller {
		public function __construct(){
			parent:: __construct()
			$this->load->model('My_User')
		}

		public function login(){
			if ($_POST){
				$usermail = $this->input->post('EmailEleve', true)
			}

		}
		
		
		public function enrol(){
			$this->load->helper('form', 'url');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('firstname', '')

	}


	}



?>