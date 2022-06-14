<?php 

class Data_produk extends CI_Controller{
	public function index()
	{
		$data['produk'] = $this->model_produk->tampil_data()->result();
		$this->load->view('templates_penjual/header');
		$this->load->view('templates_penjual/sidebar');
		$this->load->view('penjual/data_produk', $data);
		$this->load->view('templates_penjual/footer');
	}
	public function tambah_aksi()
	{
		$id_produk		=$this->input->post('id_produk');
		$nama_produk	=$this->input->post('nama_produk');
		$id_kategori	=$this->input->post('id_kategori');
		$deskripsi 		=$this->input->post('deskripsi');
		$stok 			=$this->input->post('stok');
		$harga 			=$this->input->post('harga');
		$nama_toko 		=$this->input->post('nama_toko');
		$created_at 	=$this->input->post('created_at');
		$modified_at 	=$this->input->post('modified_at');
		$gambar			=$_FILES['gambar']['name'];
		if ($gambar =''){}else{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar Gagal Diupload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}

		$data = array(
			'id_produk'		=> $id_produk,
			'nama_produk'	=> $nama_produk,
			'id_kategori'	=> $id_kategori,
			'deskripsi'		=> $deskripsi,
			'stok'			=> $stok,
			'harga'			=> $harga,
			'nama_toko'		=> $nama_toko,
			'created_at'	=> date("Y-m-d H:i:s"),
			'modified_at'	=> date("Y-m-d H:i:s"),
			'gambar'		=> $gambar
		);

		$this->model_produk->tambah_produk($data, 'produk');
		redirect('penjual/data_produk/index');
	}
	public function edit($id)
	{
		$where = array('id_produk' =>$id);
		$data['produk'] = $this->model_produk->edit_produk($where, 'produk')->result();
		$this->load->view('templates_penjual/header');
		$this->load->view('templates_penjual/sidebar');
		$this->load->view('penjual/edit_produk', $data);
		$this->load->view('templates_penjual/footer');
	}
	public function update()
	{
		$id 			=$this->input->post('id_produk');
		$nama_produk 	=$this->input->post('nama_produk');
		$id_kategori 	=$this->input->post('id_kategori');
		$deskripsi 		=$this->input->post('deskripsi');
		$stok 			=$this->input->post('stok');
		$harga 			=$this->input->post('harga');


		$data = array(
			'nama_produk'		=> $nama_produk,
			'deskripsi'			=> $deskripsi,
			'id_kategori'		=> $id_kategori,
			'stok'				=> $stok,
			'harga'				=> $harga,
		);

		$where = array(
			'id_produk' => $id
		);

		$this->model_produk->update_data($where, $data, 'produk');
		redirect('penjual/data_produk/index');
	}
	public function hapus($id)
	{
		$where = array('id_produk' => $id);
		$this->model_produk->hapus_data($where, 'produk');
		redirect('penjual/data_produk/index');
	}
	public function detail($id_produk)
	{
		$data['produk'] = $this->model_produk->detail_produk($id_produk);
			$this->load->view('templates_penjual/header');
			$this->load->view('templates_penjual/sidebar');
			$this->load->view('penjual/detail_produk', $data);
			$this->load->view('templates_penjual/footer');
	}
}