<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class My_Game extends CI_Model
{
	public function __contruct(){
		$this->load->database();
	}
	
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
		$this->db->where('matiere.idannee', $id);
		$query = $this->db->get();
		return $query->result();
	}

	function getFinalBySubject($id){
		$this->db->select('*');
		$this->db->from('devoir');
		$this->db->where('devoir.idmatiere', $id);
		$query = $this->db->get();
		return $query->result();
	}


	public function create_game1($user){
		$data = array(
			'pseudoeleve' => $user,
			'iddevoir' => $this->input->post('IdDevoir'),
			'date' => $this->input->post('Date'),
		);
		$data = html_escape($data);
		$this->db->insert('partie', $data);
	}

	public function user_games($id){
		$this->db->select('*');
		$this->db->from('partie');
		$this->db->where('partie.pseudoeleve', $id);
		$query = $this->db->get();
		return $query ->result();
		}

	public function get_game($id){
		$this->db->select('*');
		$this->db->from('partie');
		$this->db->where('partie.idpartie', $id);
		$query = $this->db->get();
		return $query->result();

	}

	public function get_guestByGame($id){
		$this->db->select('*');
		$this->db->from('inviter');
		$this->db->where('inviter.idpartie =', $id);
		$query = $this->db->get();
		return $query->result();	
	}

	public function add_player($id){	
		$data = array(
				'idpartie' => $id,
				'pseudoeleve' => $this->input->post('PseudoEleve'),
				'noteestimeei' => $this->input->post('NoteEstimee'),

			);
		$data = html_escape($data);
		$this->db->insert('inviter', $data);
	} 

	public function delete_game($id){
		$this->db->where('idpartie', $id);
		$this->db->delete('partie');
	}

	public function delete_player($id){
		$multiplewhere = ['idpartie'=>$id, 'pseudoeleve'=> $_POST['SPseudoEleve']];
		$this->db->where($multiplewhere);
		$this->db->delete('inviter');
	}

	public function get_couple(){
		$this->db->select('idpartie, pseudoeleve');
		$this->db->from('inviter');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_avg($user){
		$multiplewhere = ['idpartie'=>$user->idpartie, 'pseudoeleve'=> $user->pseudoeleve];
		$this->db->select_avg('difference');
		$this->db->from('inviter');
		$this->db->where($multiplewhere);
		$query = $this->db->get();
		return $query -> result();
	}

	public function updat($user, $idP, $diff){
		if ($_POST['NoteEstimee'] == 0){
			$data = array(
					'notefinale' => $this->input->post('NoteFinale'));
		}
		else{
			$data = array(
					'noteestimeei' => $this->input->post('NoteEstimee'),
					'notefinalei' => $this->input->post('NoteFinale'),
					'difference' => $diff
				);
		}
		$data = html_escape($data);
		$multiplewhere = ['pseudoeleve'=>$user, 'idpartie'=> $idP];
		$this->db->where ($multiplewhere);
		$this->db->update('inviter', $data,);
	}

	public function get_date($idP){
		$this->db->select('date');
		$this->db->from('partie');
		$this->db->where('partie.idpartie', $idP);
		$query = $this->db->get();
		return $query -> result();
	}
}
?>