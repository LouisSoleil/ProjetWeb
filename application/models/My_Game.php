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

	public function user_games($id){
		$this->db->select('*');
		$this->db->from('partie');
		$this->db->where('partie.PseudoEleve', $id);
		$query = $this->db->get();
		return $query ->result();
		}

	public function get_game($id){
		$this->db->select('*');
		$this->db->from('partie');
		$this->db->where('partie.IdPartie', $id);
		$query = $this->db->get();
		return $query->result();

	}

	public function get_guestByGame($id){
		$this->db->select('*');
		$this->db->from('inviter');
		$this->db->where('inviter.IdPartie =', $id);
		$query = $this->db->get();
		return $query->result();	
	
	}


	public function add_player($id){
		$data = array(
				'IdPartie' => $id,
				'PseudoEleve' => $this->input->post('PseudoEleve'),
				'NoteEstimee' => $this->input->post('NoteEstimee'),
				'NoteFinale' => $this->input->post('NoteFinale'),
			);
			$data = html_escape($data);
			$this->db->insert('inviter', $data);
		} 


	public function delete_game($id){
		$this->db->where('IdPartie', $id);
		$this->db->delete('partie');
	}

	public function delete_player($id){
		$this->db->where('IdPartie', $id);
		$this->db->where('PseudoEleve', $_POST['SPseudoEleve']);
		$this->db->delete('inviter');
	}
}
?>