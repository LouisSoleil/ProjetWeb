<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class My_User extends CI_Model {
		public function __contruct(){
			$this->load->database();
		}

		public function create_user(){
			$data = array(
				'NumEleve' => $this->input->post('NumEleve'),
				'NomEleve' => $this->input->post('NomEleve'),
				'PrenomEleve' => $this->input->post('PrenomEleve'),
				'PseudoEleve' => $this->input->post('PseudoEleve'),
				'EmailEleve' => $this->input->post('EmailEleve'),
				'MDPEleve' => $this->input->post('MDPEleve'),
				'IdAnnee' => $this->input->post('IdAnnee'),
			);
			$this->db->insert('eleve', $data);
		}

		function getAllData(){
			$query = $this->db->query('SELECT * FROM eleve');
			return $query-> result();
		}

		public function get_data($id){
			$query = $this->db->query('SELECT * FROM eleve WHERE `id` =' .$id);
			return $query->row();
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

		public function update_user(){
			
		}

		public function delete_user(){
			
		}

}

?>