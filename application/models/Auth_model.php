<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function cekUsername($username){
		return $this->db->get_where('user', ['username'=>$username]);
	}

	public function getAdmin($u,$username){
		$this->db->from("user");
		$this->db->like('username',$username);
		$this->db->like('level', 'admin');
		return $this->db->get();
	}

	function register($table,$data){
        $this->db->insert($table,$data);
    }

   public function changeForgotPass($newPass, $email){
        $encrypted = md5($newPass);

        $this->db->set('password', $encrypted);
        $this->db->where('username', $email);
        $this->db->update('user');
    }
}
