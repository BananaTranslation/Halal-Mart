<?php 

class Model_produk extends CI_Model {
	public function tampil_data(){
		return $this->db->get('produk');
	}
	public function tambah_produk($data, $table){
		$this->db->insert($table, $data);
		$this->db->select('produk.*, kategori_produk.id AS id, kategori_produk.nama_kategori,');
		$this->db->join('kategori_produk', 'produk.id_kategori = kategori_produk.id');
		$this->db->from('produk');
		$query = $this->db->get();
		return $query->result();
	}
	public function edit_produk($where, $table)
	{
		return $this->db->get_where($table, $where);
		$this->db->select('a.*, b.id AS id, b.nama_kategori,');
		$this->db->join('kategori_produk as b', 'a.id_kategori = b.id');
		$this->db->from('produk as a');
	}
	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function find($id)
	{
		$result = $this->db->where('id_produk', $id)
							->limit(1)
							->get('produk');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}
	public function detail_produk($id_produk)
	{
		$result = $this->db->where('id_produk',$id_produk)->get('produk');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}
}