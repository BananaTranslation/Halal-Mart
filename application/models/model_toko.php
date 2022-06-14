<?php

class Model_toko extends CI_Model {
	
	public function get_kategori()
	{
 		$query = $this->db->get('toko')->result();
 			return $query;
	}
}