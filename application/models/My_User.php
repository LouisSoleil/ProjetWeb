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
	        $mail = $this->input->post('EmailEleve');
	        $mail = html_escape($mail);
	        $password = $this->input->post('MDPEleve');
	        $query = $this->db->query('select eleve.MDPELeve from eleve where eleve.EmailEleve = ?',$mail);
	        $pass = $query->row_array();
	        if(isset($pass['MDPEleve'])){
	            if(password_verify($password,$pass['MDPEleve'])){
	                $queryId = $this->db->query('select eleve.PseudoEleve as id from eleve where EmailEleve=?',$mail);
	                $idUser = $queryId->row_array();	
	                return $idUser['id'];
	            } else {
	                return false;
	            }
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