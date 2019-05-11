<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {
	public function index(){
		$this->load->view('templates/frontbar');
		$this->load->view('Game');
	}
}
?>