<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Users extends CI_Controller {
		public function __construct(){
			parent:: __construct()
			$this->load->model('My_User')
		}

		ppublic function login(){
			if ($_POST){
				$usermail = $this->input->post('EmailEleve', true)
			}
		}
		
		



	}



?>