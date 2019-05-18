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

		function get_user($id){
			$query = $this->db->query('SELECT * FROM eleve WHERE PseudoEleve = ?', $id);
			return $query-> result();
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

		public function get_Password($id){
			$this->load->database();
	        $this->db->select('MDPELeve');
	        $this->db->from('eleve');
	        $this->db->where('PseudoEleve', $id);
	        $query = $this->db->get();
			return $query -> result();
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


		public function update_user($user){
			$data = array(
				'NomEleve' => $this->input->post('NomEleve'),
				'PrenomEleve' => $this->input->post('PrenomEleve'),
				'EmailEleve' => $this->input->post('EmailEleve'),
				'IdAnnee' => $this->input->post('Classe'),
			);
			$data = html_escape($data);
			$this->db->where ('PseudoEleve', $user);
			$this->db->update('eleve', $data,);
		}

		public function update_user1($user, $pwd2){
			$data = array(
				'NomEleve' => $this->input->post('NomEleve'),
				'MDPELeve' => $pwd2,
				'PrenomEleve' => $this->input->post('PrenomEleve'),
				'EmailEleve' => $this->input->post('EmailEleve'),
				'IdAnnee' => $this->input->post('Classe'),
			);
			$data = html_escape($data);
			$this->db->where ('PseudoEleve', $user);
			$this->db->update('eleve', $data,);
		}

		public function delete_user(){
			
		}

}

?>