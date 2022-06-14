<?php

class Kategori extends CI_Controller{
	public function herbal ()
	{
		$data['herbal'] = $this->model_kategori->produk_herbal()->result();
		$this->load->view('templates_pembeli/header');
		$this->load->view('templates_pembeli/sidebar');
		$this->load->view('pembeli/produk_herbal', $data);
		$this->load->view('templates_pembeli/footer');
	}
	public function fnb ()
	{
		$data['fnb'] = $this->model_kategori->food_beverage()->result();
		$this->load->view('templates_pembeli/header');
		$this->load->view('templates_pembeli/sidebar');
		$this->load->view('pembeli/food_beverage', $data);
		$this->load->view('templates_pembeli/footer');
	}
	public function kosmetik ()
	{
		$data['kosmetik'] = $this->model_kategori->kosmetik()->result();
		$this->load->view('templates_pembeli/header');
		$this->load->view('templates_pembeli/sidebar');
		$this->load->view('pembeli/kosmetik', $data);
		$this->load->view('templates_pembeli/footer');
	}
	public function rumah ()
	{
		$data['rumah'] = $this->model_kategori->kebutuhan_rumah()->result();
		$this->load->view('templates_pembeli/header');
		$this->load->view('templates_pembeli/sidebar');
		$this->load->view('pembeli/kebutuhan_rumah', $data);
		$this->load->view('templates_pembeli/footer');
	}
}