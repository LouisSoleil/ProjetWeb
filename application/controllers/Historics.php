<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Historics extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('My_Game');
		$this->load->model('My_Cookie');
	}

	public function index(){
		$user = $this->My_Cookie->IsLoggedIn();
		if (!($user)){
			redirect("Users");
		}
		else {
			$data['games'] = $this->My_Game->user_games($user);
			$this->load->view('templates/header');
			$this->load->view('Historic', $data);
		}
	}
}
?>