<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_Student extends CI_Model
{
	public function __contruct(){
		$this->load->database();
	}

	protected $table = 'eleve';
	protected $primary_key = 'NumEleve';
	
	public function add_student($data)
	{
		$data = array(
			'NumEleve' => $this->input->post('NumEleve'),
			'EmailEleve' => $this->input->post('EmailEleve'),
			'MDPEleve' => $this->input->post('MDPEleve'),
			'NomEleve' => $this->input->post('NomEleve'),
			'PrenomEleve' => $this->input->post('PrenomEleve'),
			'PseudoEleve' => $this->input->post('PseudoEleve'),	
		);
		$this->db->insert('eleve', $data);
	}
	
	/**
	 *	modifier les information d'un etudiant
	 */
	public function edit_student()
	{
		
	}
	
	
	public function rm_student()
	{
		
	}
	
	
	public function get_student()
	{
		$this->db->select('*');
    	$this->db->from('eleve e');
    	$this->db->join('annee a', 'e.IdAnnee = a.IdAnnee');
		$query = $this->db->get();
		return $query->result();
	}
}
