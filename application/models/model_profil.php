<?php 

class Model_profil extends CI_Model {
	public function tampil_profil(){
		return $this->db->get('pembeli');
	}