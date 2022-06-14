<?php 

class Model_kategori2 extends CI_Model {
	public function tampil_kategori(){
		return $this->db->get('kategori_produk');
	}
	public function tambah_kategori($data, $table){
		$this->db->insert($table, $data);
	}
	public function edit_kategori($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function update_kategori($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function hapus_kategori($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function find($id)
	{
		$result = $this->db->where('id', $id)
							->limit(1)
							->get('kategori_produk');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}
	public function detail_kategori($id)
	{
		$result = $this->db->where('id',$id)->get('kategori_produk');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}
}