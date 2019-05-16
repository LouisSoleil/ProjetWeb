<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('HomePage');
	}

	public function welcome2()
	{
		$this->load->view('templates/header2');
		$this->load->view('HomePage');
	}
}
