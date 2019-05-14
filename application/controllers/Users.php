<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Users extends CI_Controller {
		public function __construct(){
			parent:: __construct();
			$this->load->model('My_User');
		}

		public function index() {
	        if (isset($_COOKIE['IdEleve']) && isset($_COOKIE['MDPEleve'])) {
	            $this->load->view('templates/header2');
	            $this->load->view('HomePage');
	        } 
	        else {
	            echo "vous n'êtes plus connecté";
	            $data['title'] = 'connexion';
	            $this->load->view('templates/header', $data);
	            $this->load->view('HomePage');
	        }
    	}

		function create(){
			$this->My_User->create_user();
			$this->load->view('templates/header');
			$this->load->view('Connexion');
		}
		

		public function edit($id) {
			$data['row'] = $this->My_User->get_data($id);
			$this->load->view('templates/header');
			$this->load->view('Edit_profil', $data);
		}

		public function login() {
			$user = $this->My_User->getByMail($_POST['EmailEleve']);
			$name = $this->My_User->getPseudoByMail($_POST['EmailEleve']);
	        $mdpUser = $_POST['MDPEleve'];
	        if ($user == null) {
	            $this->load->view('Connexion');
	        } 
	        else {
	            $data['user'] = $user;
	            $idUser = $user[0]->NumEleve;
	            $mdpUser = $user[0]->MDPEleve;
	            if ($data['user'] != NULL) {
	                $this->session->set_userdata(array('username' => $name));
	                setcookie('IdEleve', $idUser, time() + 3600, '/');
	                setcookie('MDPEleve', $mdpUser, time() + 3600, '/');
	                $this->index();
	            }
	        }
		}       
	}
?>