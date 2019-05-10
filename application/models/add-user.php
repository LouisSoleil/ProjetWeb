<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class new_user extends CI_Model
{
	protected $table = 'eleve';
    protected $primary_key = 'NumEleve';
	/**
	 *	Add student
	 *	@param string $email 	mail address of new student
	 *	@param string $name 	student's name
	 *	@param string $fisrtname 	student's first name
	 *	@param string $pseudo 	student's pseudo
	 *	@return bool		Le résultat de la requête
	 */
	public function add_student($email, $name, $fisrtname, $pseudo)
	{
		return $this->db->set('EmailEleve', $email)
			->set('NomEleve', 	 $name)
			->set('PrenomEleve', $fisrtname)
			->set('PseudoEleve', $pseudo)
			->set('date_ajout', 'NOW()', false)
			->set('date_modif', 'NOW()', false)
			->insert($this->table);
	}
	
	
	public function editer_news()
	{
		
	}
	
	/**
	 *	Supprime une news
	 */
	public function supprimer_news()
	{
		
	}
	
	/**
	 *	Retourne le nombre de news
	 */
	public function count()
	{
		
	}
	
	/**
	 *	Retourne une liste de news
	 */
	public function liste_news()
	{
		
	}
}
