<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class My_Game extends CI_Model
{
	public function __contruct(){
		$this->load->database();
	}

	protected $table = 'annee';



	public function get_year()
	{
		$this->db->select('*');
    	$this->db->from('annee');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_subject()
	{
		$this->db->select('*');
    	$this->db->from('matiere');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_finals()
	{
		$this->db->select('*');
    	$this->db->from('devoir');
		$query = $this->db->get();
		return $query->result();
	}

	public function create_game(){
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


	public function read_game(){
		
	}


	public function upgrade_game(){
		
	}


	public function delete_game(){
		
	}
}
?>