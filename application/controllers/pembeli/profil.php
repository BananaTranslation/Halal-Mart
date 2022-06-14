<?php 

class Daftar_produk extends CI_Controller{
	public function index()
	{
		$data['profil'] = $this->model_profil->tampil_data()->result();
		$this->load->view('templates_pembeli/header');
		$this->load->view('templates_pembeli/sidebar');
		$this->load->view('pembeli/profil', $data);
		$this->load->view('templates_pembeli/footer');