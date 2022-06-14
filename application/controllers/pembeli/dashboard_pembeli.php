<?php 

class Dashboard_pembeli extends CI_Controller{
	public function index()
	{
		$data['produk'] = $this->model_produk->tampil_data()->result();
		$this->load->view('templates_pembeli/header');
		$this->load->view('templates_pembeli/sidebar');
		$this->load->view('pembeli/dashboard', $data);
		$this->load->view('templates_pembeli/footer');
	}
	public function pesan($id)
	{
		$rumah = $this->model_produk->find($id);

		$data = array(
        'id'      => $rumah->id_produk,
        'qty'     => 1,
        'price'   => $rumah->harga,
        'name'    => $rumah->nama_produk,
		);

		$this->cart->insert($data);
		redirect('pembeli/dashboard_pembeli');
	}
	public function detail_keranjang()
	{
		$this->load->view('templates_pembeli/header');
		$this->load->view('templates_pembeli/sidebar');
		$this->load->view('pembeli/keranjang');
		$this->load->view('templates_pembeli/footer');
	}
	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('pembeli/dashboard_pembeli');
	}
	public function pembayaran()
	{
		$this->load->view('templates_pembeli/header');
		$this->load->view('templates_pembeli/sidebar');
		$this->load->view('pembeli/pembayaran');
		$this->load->view('templates_pembeli/footer');
	}
	public function proses_pesanan()
	{
		$is_processed = $this->model_invoice->index();
		if($is_processed){
			$this->cart->destroy();
			$this->load->view('templates_pembeli/header');
			$this->load->view('templates_pembeli/sidebar');
			$this->load->view('pembeli/proses_pesanan');
			$this->load->view('templates_pembeli/footer');	
		}else {
			echo "Maaf, Pesanan Anda Gagal diproses";
		}
		
	}
	public function detail($id_produk)
	{
		$data['produk'] = $this->model_produk->detail_produk($id_produk);
			$this->load->view('templates_pembeli/header');
			$this->load->view('templates_pembeli/sidebar');
			$this->load->view('pembeli/detail_produk', $data);
			$this->load->view('templates_pembeli/footer');
	}

}