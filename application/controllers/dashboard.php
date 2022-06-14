<?php
/**
 * 
 */
class Dashboard extends CI_Controller {
	
	public function index()
	{
		$data['produk'] = $this->model_produk->tampil_data()->result();
		$this->load->view('templates_user/header');
		$this->load->view('templates_user/sidebar');
		$this->load->view('tampilan_awal', $data);
		$this->load->view('templates_user/footer');
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
		redirect('dashboard');
	}
	public function detail_keranjang()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	}
	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('dashboard/index');
	}
	public function pembayaran()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');
	}
	public function proses_pesanan()
	{
		$is_processed = $this->model_invoice->index();
		if($is_processed){
			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('proses_pesanan');
			$this->load->view('templates/footer');	
		}else {
			echo "Maaf, Pesanan Anda Gagal diproses";
		}
		
	}
	public function detail($id_produk)
	{
		$data['produk'] = $this->model_produk->detail_produk($id_produk);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('detail_rumah', $data);
			$this->load->view('templates/footer');
	}



}