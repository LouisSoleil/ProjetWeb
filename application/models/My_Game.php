<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class My_Game extends CI_Model
{
	public function __contruct(){
		$this->load->database();
	}

	protected $table = 'annee';


	public function get_filiere()
	{
		$this->db->select('*');
    	$this->db->from('filiere');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_year()
	{
		$this->db->select('*');
    	$this->db->from('annee a');
    	$this->db->join('filiere f', 'f.IdAnnee = a.IdAnnee');
		$query = $this->db->get();
		return $query->result();
	}
}
?>