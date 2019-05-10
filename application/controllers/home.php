<?php

class Home extends CI_Controller {
	public function index(){
		$this->load->view('templates/frontbar');
		$this->load->view('HomePage');
	}
}
?>