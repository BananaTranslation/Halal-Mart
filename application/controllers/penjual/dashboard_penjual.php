<?php 

class Dashboard_penjual extends CI_Controller{
	public function index()
	{
		$this->load->view('templates_penjual/header');
		$this->load->view('templates_penjual/sidebar');
		$this->load->view('penjual/dashboard');
		$this->load->view('templates_penjual/footer');
	}
}