<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyGames extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('My_Game');
	}

	public function index(){
		$data['games'] = $this->My_Game->user_games();
		$this->load->view('templates/header');
		$this->load->view('Mygame', $data);
	}


}
?>