<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class My_User extends CI_Model {


		public function login ($usermail, $password){
			$user = $this->db->where(array('EmailEleve' => $usermail, "MDPEleve" => $password))->get('eleve');
			return $user->first_row('');
		}
	}





$>