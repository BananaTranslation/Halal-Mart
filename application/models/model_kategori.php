<?php

class Model_kategori extends CI_Model {
	
	public function produk_herbal()
	{
 		return $this->db->get_where("produk", array('id_kategori' => '1'));
	}
	public function food_beverage()
	{
 		return $this->db->get_where("produk", array('id_kategori' => '2'));
	}
	public function kosmetik()
	{
 		return $this->db->get_where("produk", array('id_kategori' => '3'));
	}
	public function kebutuhan_rumah()
	{
 		return $this->db->get_where("produk", array('id_kategori' => '4'));
	}
}