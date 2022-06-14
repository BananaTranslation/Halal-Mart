<?php

class Id_kategori extends CI_Controller{
	public function herbal()
	{
		$data['herbal'] = $this->model_kategori->data_herbal()->result();
		$this->load->view('templates_penjual/header');
		$this->load->view('templates_penjual/sidebar');
		$this->load->view('penjual/herbal', $data);
		$this->load->view('templates_penjual/footer');
	}
}