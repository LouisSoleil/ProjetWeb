<?php
class My_Cookie extends CI_Model
{

    public function __contruct(){
        $this->load->database();
    }

    public function setCookie($idUser, $token)
    {
        $token = password_hash($token, PASSWORD_DEFAULT);
        $data = array(
            'NumEleve' => $idUser,
            'token' => $token
        );
        $this->db->insert('tokeneleve', $data);
    }

    public function isLoggedIn()
    {
        $cookie = $this->input->cookie('LoginToken');
        $data = json_decode($cookie, true);
        if (isset($cookie)) {
            $token = $data['token'];
            $idUser = $data['NumEleve'];
            $query = $this->db->query('SELECT token FROM tokeneleve WHERE idUser = ?', $idUser);
            $result = $query->result_array();
            foreach ($result as $t) {
                if (password_verify($token, $t['token'])) {
                    return $idUser;
                } else {
                    //DO NOTHING
                }
            }
            return false;
        }
    }

    public function deleteCookie(){
        $cookie = $this->input->cookie('LoginToken');
        $data = json_decode($cookie, true);
        if (isset($cookie)) {
            $token = $data['token'];
            $idUser = $data['NumEleve'];
            $query = $this->db->query('SELECT token FROM tokeneleve WHERE NumEleve = ?', $idUser);
            $result = $query->result_array();
            foreach ($result as $t) {
                if (password_verify($token, $t['token'])) {
                    delete_cookie('LoginToken');
                    $this->db->delete('tokeneleve', array('token' => $t['token']));
                }
            }
        }
    }


    public function isLoggedIn()
    {
        $cookie = $this->input->cookie('LoginToken');
        $data = json_decode($cookie, true);
        if (isset($cookie)) {
            $token = $data['token'];
            $idUser = $data['NumEleve'];
            $query = $this->db->query('SELECT token FROM tokeneleve WHERE NumEleve = ?', $idUser);
            $result = $query->result_array();
            foreach ($result as $t) {
                if (password_verify($token, $t['token'])) {
                    return $idUser;
                } else {
                    //DO NOTHING
                }
            }
            return false;
        }
    }
}