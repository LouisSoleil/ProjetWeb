<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class My_User extends CI_Model {


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

	public function read_user(){
		
	}

	public function update_user(){
		
	}

	public function delete_user(){
		
	}

}

?>