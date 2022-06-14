<?php

class Model_auth extends CI_Model{

	public function cek_login()
	{
		$nomor_hp = set_value('nomor_hp');
		$password = set_value('password');

		$result = $this->db ->where('nomor_hp', $nomor_hp)
							->where('password', $password)
							->limit(1)
							->get('users');

		if($result->num_rows() > 0){
			return $result->row();
		} else{
			return array();
		}
	}
}