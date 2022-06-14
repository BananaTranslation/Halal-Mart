<?php 

class Data_kategori extends CI_Controller{
	public function index()
	{
		$data['kategori'] = $this->model_kategori2->tampil_kategori()->result();
		$this->load->view('templates_penjual/header');
		$this->load->view('templates_penjual/sidebar');
		$this->load->view('penjual/data_kategori', $data);
		$this->load->view('templates_penjual/footer');
	}
	public function tambah_aksi()
	{
		$id				=$this->input->post('id');
		$nama_kategori	=$this->input->post('nama_kategori');
		$deskripsi 		=$this->input->post('deskripsi');
		$created_at 	=$this->input->post('created_at');
		$modified_at 	=$this->input->post('modified_at');

		$data = array(
			'id'			=> $id,
			'nama_kategori'	=> $nama_kategori,
			'deskripsi'		=> $deskripsi,
			'created_at'	=> date("Y-m-d H:i:s"),
			'modified_at'	=> date("Y-m-d H:i:s"),
		);

		$this->model_kategori2->tambah_kategori($data, 'kategori_produk');
		redirect('penjual/data_kategori/index');
	}
	public function edit($id)
	{
		$where = array('id' =>$id);
		$data['kategori'] = $this->model_kategori2->edit_kategori($where, 'kategori_produk')->result();
		$this->load->view('templates_penjual/header');
		$this->load->view('templates_penjual/sidebar');
		$this->load->view('penjual/edit_kategori', $data);
		$this->load->view('templates_penjual/footer');
	}
	public function update()
	{
		$id 			=$this->input->post('id');
		$nama_kategori 	=$this->input->post('nama_kategori');
		$deskripsi 		=$this->input->post('deskripsi');
						

		$data = array(
			'nama_kategori'		=> $nama_kategori,
			'deskripsi'			=> $deskripsi,
			'modified_at'		=> date("Y-m-d H:i:s"),
		);

		$where = array(
			'id' => $id
		);

		$this->model_kategori2->update_kategori($where, $data, 'kategori_produk');
		redirect('penjual/data_kategori/index');
	}
	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->model_kategori2->hapus_kategori($where, 'kategori_produk');
		redirect('penjual/data_kategori/index');
	}
}