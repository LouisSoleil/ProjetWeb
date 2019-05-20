<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rankings extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('My_User');
		$this->load->model('My_Game');
	}

	public function index(){
		$users = $this->My_Game->get_couple();
    	foreach ($users as $user) {
    		$avg = $this->My_Game->get_avg($user);
			$this->My_User->add_mark($user->pseudoeleve, $avg[0]->difference);
    	}

    	$data['students'] = $this->My_User->getAllDataMin();
		$this->load->view('templates/header');
		$this->load->view('Ranking', $data);
    }


}
?>