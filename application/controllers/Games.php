<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('My_Game');
		$this->load->model('My_User');
		$this->load->model('My_Cookie');
	}

	public function index(){
		$user = $this->My_Cookie->isLoggedIn();
        $data ['years']= $this->My_User->getYearByUser($user);
		$this->load->view('templates/header');
		$this->load->view('Game', $data);
	}


	function get_game(){
		$data ['years'] = $_POST['IdAnnee'];
		$data ['subjects'] = $_POST['IdMatiere'];
		$data ['finals'] = $this->My_Game->getFinalBySubject($_POST['IdMatiere']);
        $this->load->view('templates/header');
		$this->load->view('Game1', $data);
	}


	public function create1(){
		$user=$this->My_Cookie->isLoggedIn();
		if (!($user)) {
			redirect('Games');
			}
		else{
	    	$this->My_Game->create_game1($user);
	        redirect('Historics', $data);
		}
	}

	public function invite(){
		$this->form_validation->set_rules('PseudoEleve', 'Pseudo du nouveau joueur', 'required|is_unique[eleve.PseudoEleve]');
		if ($this->form_validation->run() === FALSE) {
			$id = $_POST['Partie'];
			$this->My_Game->add_player($id);
	        redirect('/Overviews/history/' .$id);
        }
        else{
        	redirect('Registers');
	    }    		
    }

    public function delete(){
		$this->form_validation->set_rules('SPseudoEleve', 'Pseudo du joueur à supprimer', 'required|is_unique[eleve.PseudoEleve]');
		if ($this->form_validation->run() === FALSE) {
			$id = $_POST['SPartie'];
			$this->My_Game->delete_player($id);
	        redirect('/Overviews/history/' .$id);
        }
        else{
        	$id = $_POST['SPartie'];
			redirect('/Overviews/history/' .$id);
	    }    		
    }
}
?>