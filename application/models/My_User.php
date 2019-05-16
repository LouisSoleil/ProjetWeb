<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class My_User extends CI_Model {
		public function __contruct(){
			$this->load->database();
		}

		public function create_user($encrypted){
			$data = array(
				'NomEleve' => $this->input->post('NomEleve'),
				'PrenomEleve' => $this->input->post('PrenomEleve'),
				'PseudoEleve' => $this->input->post('PseudoEleve'),
				'EmailEleve' => $this->input->post('EmailEleve'),
				'MDPEleve' => $encrypted,
				'IdAnnee' => $this->input->post('IdAnnee'),
			);
			$data = html_escape($data);
			$this->db->insert('eleve', $data);
		}

		function getAllData(){
			$query = $this->db->query('SELECT * FROM eleve');
			return $query-> result();
		}

		function get_data($id){
			$query = $this->db->query('SELECT * FROM eleve WHERE `PseudoEleve` = ?', $id);
			return $query-> row();
		}

		function get_token($id){
			$query = $this->db->query('SELECT * FROM tokeneleve WHERE `token` = ?', $id);
			return $query->result();
		}

		public function get_PseudoEleve(){
			$this->load->database();
	        $this->db->select('*');
	        $this->db->from('eleve');
	        $this->db->where('PseudoEleve', $_COOKIE['PseudoEleve']);
	        $query = $this->db->get();
			return $query;
		}

		public function getByMail($mail) {
        	$this->db->select('*');
            $this->db->from('eleve');
            $this->db->where('EmailEleve', $mail);
            $query = $this->db->get();
            return $query->result();
        }

        public function getPseudoByMail($mail) {
        $this->load->database();
        $this->db->select('PseudoEleve');
        $this->db->from('eleve');
        $this->db->where('EmailEleve', $mail);
        $query = $this->db->get();
        return $query->result();
        }


        public function login(){
	        $idLogged = $this->My_Cookie->isLoggedIn();
	        if (!(isset($idLogged))) {
	            $this->form_validation->set_rules('EmailEleve', 'Email', 'required|valid_email');
	            $this->form_validation->set_rules('MDPEleve', 'Password', 'required|min_length[7]');
	            if ($this->form_validation->run() === FALSE) {
	                $this->load->view('templates/header');
	                $this->load->view('connexion');
	            } 
	            else {
	                if ($this->My_User->login()) {
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
	                } else {
	                    //faire des views d'erreur
	                }
	            }
	        } 
	        else {
	            redirect('Welcome/welcome2');
	        }
	    }

	    public function get_user(){
			$this->db->select('*');
	    	$this->db->from('eleve e');
	    	$this->db->join('annee a', 'e.IdAnnee = a.IdAnnee');
			$query = $this->db->get();
			return $query->result();
		}


	public function update_user(){
		
	}

	public function delete_user(){
		
	}

}

?>