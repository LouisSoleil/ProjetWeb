<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rankings extends CI_Controller {
	public function index(){
		$this->load->view('templates/frontbar');
		$this->load->view('Ranking');
	}
}
?>