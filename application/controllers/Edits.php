<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edits extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('My_User');
	}
	public function index(){
		$user=$this->My_Cookie->isLoggedIn();
        $data ['Users']= $this->My_User->get_user($user);
        $this->load->view('templates/header');
        $this->load->view('Edit_profil', $data);
	}
}
?>