<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registers extends CI_Controller {
	public function index(){
		$this->load->view('templates/frontbar');
		$this->load->view('Register');
	}
}
?>