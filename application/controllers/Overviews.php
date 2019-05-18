<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overviews extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('My_Game');
	}

	public function history($idP){
		$data['alls'] = $this->My_Game->get_guestByGame($idP);
		$data['games'] = $this->My_Game->get_FinalByGame($idP);
		$this->load->view('templates/header');
		$this->load->view('Overview', $data);
	}
}