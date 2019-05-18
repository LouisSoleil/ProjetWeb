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

	function getSubjectByYear($id){
		$this->db->select('*');
		$this->db->from('matiere');
		$this->db->where('matiere.IdAnnee', $id);
		$query = $this->db->get();
		return $query->result();
	}

	function getFinalBySubject($id){
		$this->db->select('*');
		$this->db->from('devoir');
		$this->db->where('devoir.IdMatiere', $id);
		$query = $this->db->get();
		return $query->result();
	}


	public function create_game1($user){
		$data = array(
			'PseudoEleve' => $user,
			'IdDevoir' => $this->input->post('IdDevoir'),
			'Date' => $this->input->post('Date'),
		);
		$data = html_escape($data);
		$this->db->insert('partie', $data);
	}

	public function user_games(){
		$id = $this->My_Cookie->IsLoggedIn();
		if (!($id)){
			redirect('Users');
		}
		else{
			$this->db->select('*');
			$this->db->from('partie');
			$this->db->where('partie.PseudoEleve', $id);
			$query = $this->db->get();
			return $query ->result();
		}
	}

	public function get_game($id){
		$this->db->select('*');
		$this->db->from('partie');
		$this->db->where('partie.IdPartie', $id);
		$query = $this->db->get();
		return $query->result();

	}


	public function get_guest($id){
		$this->db->select('*');
		$this->db->from('invite');
		$this->db->join('partie', 'partie.IdPartie = invite.IdPartie');
		$query = $this->db->get();
		return $query->result();	
	}


	public function upgrade_game(){
		
	}


	public function delete_game(){
		
	}
}
?>