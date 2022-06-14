<?php 

class Invoice extends CI_Controller{
	public function index()
	{
		$data['invoice'] = $this->model_invoice->tampil_data();
		$this->load->view('templates_penjual/header');
		$this->load->view('templates_penjual/sidebar');
		$this->load->view('penjual/invoice', $data);
		$this->load->view('templates_penjual/footer');
	}
	public function detail($id_invoice)
	{
		$data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
		$data['pemesanan'] = $this->model_invoice->ambil_id_pemesanan($id_invoice);

		$this->load->view('templates_penjual/header');
		$this->load->view('templates_penjual/sidebar');
		$this->load->view('penjual/detail_invoice', $data);
		$this->load->view('templates_penjual/footer');
	}
	public function hapus($id)
	{
		$where = array('id_invoice' => $id);
		$this->model_produk->hapus_data($where, 'tb_invoice');
		redirect('penjual/invoice/index');
	}
}