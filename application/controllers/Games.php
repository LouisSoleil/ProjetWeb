<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('My_Game', 'g');
	}

	public function index(){
		$data['years'] = $this->g->get_year();
		$data['subjects'] = $this->g->get_subject();
		$data['finals'] = $this->g->get_finals();
		$this->load->view('templates/header');
		$this->load->view('Game', $data);
	}

	public function Games(){
		$data['years'] = $this->My_Game->get_year();
		$data['subjects'] = $this->My_Game->get_subject();
		$data['finals'] = $this->My_Game->get_finals();
		$this->load->view('templates/header2');
		$this->load->view('Game', $data);
	}

	public function create(){
		$this->form_validation->set_rules('years', 'Classe', 'required');
        $this->form_validation->set_rules('subject', 'Mail Etudiant', 'required|valid_email|is_unique[eleve.EmailEleve]');
        $this->form_validation->set_rules('final', 'Mot de passe', 'required|min_length[7]');
        $this->form_validation->set_rules('date', 'Confirm Password', 'required|matches[MDPEleve]');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('Game');
        } 
        else{
            redirect('Welcome/welcome2');
		}
	}

}
?>