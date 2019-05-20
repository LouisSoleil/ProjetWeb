<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class My_User extends CI_Model {
		public function __contruct(){
			$this->load->database();
		}

		public function create_user($encrypted){
			$data = array(
				'nomeleve' => $this->input->post('NomEleve'),
				'prenomeleve' => $this->input->post('PrenomEleve'),
				'pseudoeleve' => $this->input->post('PseudoEleve'),
				'emaileleve' => $this->input->post('EmailEleve'),
				'mdpeleve' => $encrypted,
				'idannee' => $this->input->post('IdAnnee'),
			);
			$data = html_escape($data);
			$this->db->insert('eleve', $data);
		}

		function getAllData(){
			$query = $this->db->query('SELECT * FROM eleve');
			return $query-> result();
		}

		function getAllDataMin(){
			$this->db->select('*');
			$this->db->from('eleve');
			$this->db->order_by('moyenneeleve', 'asc');
			$query = $this->db->get();
			return $query-> result();
		}

		function get_user($id){
			$query = $this->db->query('SELECT * FROM eleve WHERE pseudoeleve = ?', $id);
			return $query-> result();
		}

		function get_token($id){
			$query = $this->db->query('SELECT * FROM tokeneleve WHERE `token` = ?', $id);
			return $query->result();
		}

		function getYearByUser($user){
			$this->db->select('*');
			$this->db->from('eleve');
			$this->db->join('matiere', 'matiere.idannee = eleve.idannee');
			$this->db->where('pseudoeleve', $user);
			$query = $this->db->get();
			return $query -> result();
			}

		public function get_PseudoEleve(){
			$this->load->database();
	        $this->db->select('*');
	        $this->db->from('eleve');
	        $this->db->where('pseudoeleve', $_COOKIE['PseudoEleve']);
	        $query = $this->db->get();
			return $query;
		}

		public function get_Password($id){
			$this->load->database();
	        $this->db->select('mdpeLeve');
	        $this->db->from('eleve');
	        $this->db->where('pseudoeleve', $id);
	        $query = $this->db->get();
			return $query -> result();
		}

		public function getByMail($mail) {
        	$this->db->select('*');
            $this->db->from('eleve');
            $this->db->where('emaileleve', $mail);
            $query = $this->db->get();
            return $query->result();
        }

        public function getPseudoByMail($mail) {
        $this->load->database();
        $this->db->select('pseudoeleve');
        $this->db->from('eleve');
        $this->db->where('emaileleve', $mail);
        $query = $this->db->get();
        return $query->result();
        }

		public function update_user($user){
			$data = array(
				'nomeleve' => $this->input->post('NomEleve'),
				'prenomeleve' => $this->input->post('PrenomEleve'),
				'emaileleve' => $this->input->post('EmailEleve'),
				'idannee' => $this->input->post('Classe'),
			);
			$data = html_escape($data);
			$this->db->where ('pseudoeleve', $user);
			$this->db->update('eleve', $data,);
		}

		public function update_user1($user, $pwd2){
			$data = array(
				'nomeleve' => $this->input->post('NomEleve'),
				'mdpeLeve' => $pwd2,
				'prenomeleve' => $this->input->post('PrenomEleve'),
				'emaileleve' => $this->input->post('EmailEleve'),
				'idannee' => $this->input->post('Classe'),
			);
			$data = html_escape($data);
			$this->db->where ('pseudoeleve', $user);
			$this->db->update('eleve', $data,);
		}

		public function add_mark($user, $diff){;
			$this->db->where('pseudoeleve', $user);
			$this->db->set('moyenneeleve', $diff);
			$this->db->update('eleve');
		}
}

?>