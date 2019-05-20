<?php
class My_Cookie extends CI_Model
{

    public function __contruct(){
        $this->load->database();
    }

    public function setCookie($idUser, $token)
    {
        $token2 = password_hash($token, PASSWORD_DEFAULT);
        $data = array(
            'pseudoeleve' => $idUser,
            'token' => $token2
        );
        $this->db->insert('tokeneleve', $data);
    }


    public function isLoggedIn()
    {
        $cookie = $this->input->cookie('LoginToken');
        $data = json_decode($cookie, true);
        if (isset($cookie)) {
            $token = $data['token'];
            $idUser = $data['PseudoEleve'];
            $query = $this->db->query('SELECT token FROM tokeneleve WHERE pseudoeleve = ?', $idUser);
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
            $idUser = $data['pseudoeleve'];
            $query = $this->db->query('SELECT token FROM tokeneleve WHERE pseudoeleve = ?', $idUser);
            $result = $query->result_array();
            foreach ($result as $t) {
                if (password_verify($token, $t['token'])) {
                    delete_cookie('LoginToken');
                    $this->db->delete('tokeneleve', array('token' => $t['token']));
                }
            }
        }
    }
}