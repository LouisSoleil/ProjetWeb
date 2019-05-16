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

	public function create_game($user){
		$data = array(
			'ModePartie' => $this->input->post('ModePartie'),
			'PseudoEleve' => $user,
			'NoteEstime' => $this->input->post('NoteEstimee'),
			'NoteFinale' => $this->input->post('NoteFinale'),
			'Date' => $this->input->post('Date'),

		);
		$data = html_escape($data);
		$this->db->insert('partie', $data);
	}

	public function get_game($user)
	{
		$query = $this->db->query('SELECT IdPartie FROM partie WHERE `PseudoEleve` = ?', $user); //récupérer la derniere partie crée (faire en sorte qu'il soit sur la partie crée)
		return $query->result();
	}


	public function read_game(){
		
	}


	public function upgrade_game(){
		
	}


	public function delete_game(){
		
	}
}
?>