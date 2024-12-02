<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	public function periksa_masuk($username,$password) {
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$result = $this->db->get('admin',1);
		return $result;
	}
}