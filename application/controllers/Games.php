<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('My_Game');
		$this->load->model('My_User');
		$this->load->model('My_Cookie');
	}

	public function index(){
		$user = $this->My_Cookie->isLoggedIn();
        $data ['years']= $this->My_User->getYearByUser($user);
		$this->load->view('templates/header');
		$this->load->view('Game', $data);
	}


	function get_game(){
		$data ['years'] = $_POST['IdAnnee'];
		$data ['subjects'] = $_POST['IdMatiere'];
		$data ['finals'] = $this->My_Game->getFinalBySubject($_POST['IdMatiere']);
        $this->load->view('templates/header');
		$this->load->view('Game1', $data);
	}


	public function create1(){
		$user=$this->My_Cookie->isLoggedIn();
		if (!($user)) {
			redirect('Games');
			var_dump($test1); 
			}
		else{
	    	$this->My_Game->create_game1($user);
	        redirect('invite', $data);
		}
	}

	public function invite(){

	}

	public function overwiew(){
		$user = $this->My_Cookie->isLoggedIn();
		if (!($user)){
			redirect('Users');
		}
		else{
			$all = $this->My_Game->get_guest($user);
			$this->load->view('templates/header');
			$this->load->view('Overview', $all);
		}
	}

}
?>