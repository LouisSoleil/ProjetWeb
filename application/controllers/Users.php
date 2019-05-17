<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Users extends CI_Controller {
		public function __construct(){
			parent:: __construct();
			$this->load->model('My_User');
			$this->load->model('My_Game');
			$this->load->model('My_Cookie');
		}

		public function index() {
	        if (isset($_COOKIE['PseudoEleve']) && isset($_COOKIE['MDPEleve'])) {
	            $this->load->view('templates/header2');
	            $this->load->view('HomePage');
	        } 
	        else {
	            echo "vous n'êtes plus connecté";
	            $data['title'] = 'connexion';
	            $this->load->view('templates/header', $data);
	            $this->load->view('Connexion');
	        }
    	}

		function create(){
            $this->form_validation->set_rules('EmailEleve', 'Mail Etudiant', 'required|valid_email|is_unique[eleve.EmailEleve]');
            $this->form_validation->set_rules('MDPEleve', 'Mot de passe', 'required|min_length[7]');
            $this->form_validation->set_rules('MDPEleve2', 'Confirm Password', 'required|matches[MDPEleve]');
            $this->form_validation->set_rules('PrenomEleve', 'Prénom', 'required');
            $this->form_validation->set_rules('NomEleve', 'Nom', 'required');
            $this->form_validation->set_rules('PseudoEleve', 'Pseudo', 'required|is_unique[eleve.PseudoEleve]');

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('Users/register');
            } 
            else{
            	$encrypted = password_hash(($this->input->post('MDPEleve')), PASSWORD_BCRYPT);
                $this->My_User->create_user($encrypted);
                redirect('Welcome/welcome2');
			}
		}

		public function edit() {
			
		}

		

		public function login(){
            $idLogged = $this->My_Cookie->isLoggedIn();
            if (!(isset($idLogged))) {
                $this->form_validation->set_rules('EmailEleve', 'Email', 'required|valid_email');
                $this->form_validation->set_rules('MDPEleve', 'Password', 'required|min_length[7]');
                if ($this->form_validation->run() === FALSE) {
                    $this->load->view('templates/header');
                    $this->load->view('Users/login');
                } 
                else {
                    $idUser = $this->My_User->login();
                    $cstrong = true;
                    $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                    $values = array(
                        'PseudoEleve' => $idUser,
                        'token' => $token
                    );
                    $this->input->set_cookie('LoginToken', json_encode($values), (60 * 60 * 24 * 7), '', '/', '', null, true);
                    $this->My_Cookie->setCookie($idUser, $token);
                    redirect('Welcome/welcome2');
                }
            }
            else {
                redirect('Welcome/welcome2');
            }
    }

}
?>