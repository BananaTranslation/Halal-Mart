<?php 

class Registrasi extends CI_Controller{

	public function index()
	{
		$this->form_validation->set_rules('nama',' Nama', 'required');
		$this->form_validation->set_rules('nomor_hp',' Nomor HP', 'required');
		$this->form_validation->set_rules('password_1',' Password', 'required|matches[password_2]');
		$this->form_validation->set_rules('password_2',' Password', 'required|matches[password_1]');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('registrasi');
			$this->load->view('templates/footer');
			
		} else {
			$data = array(
				'nama' 			=> $this->input->post('nama'),
				'nomor_hp'		=> $this->input->post('nomor_hp'),
				'password' 		=> password_hash($this->input->post('password_1'), PASSWORD_DEFAULT),
				'role_id' 		=> $this->input->post('role_id'),
				'created_at'	=> date("Y-m-d H:i:s"),
				'modified_at'	=> date("Y-m-d H:i:s"),
			);
			$this->db->insert('users', $data);
			redirect('auth/login');
		}
		
	}
}