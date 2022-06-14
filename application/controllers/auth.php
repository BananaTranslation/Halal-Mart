<?php 
	/**
	 * 
	 */
class Auth extends CI_Controller {
		
		public function login()
		{
			$this->form_validation->set_rules('nomor_hp','Nomor HP','required');
			$this->form_validation->set_rules('password','Password','required');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('templates/header');
				$this->load->view('form_login');
				$this->load->view('templates/footer');
			} else {
				$auth = $this->model_auth->cek_login();

				if ($auth == FALSE) 
				{
					$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Nomor HP atau Password anda salah! 
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');

					redirect('auth/login');
				} else {
					$this->session->set_userdata('nomor_hp', $auth->nomor_hp);
					$this->session->set_userdata('role_id', $auth->role_id);

					switch ($auth->role_id) {
						case 'admin': 
							redirect('admin/dashboard_admin');
							break;
						case 'penjual': 
							redirect('penjual/dashboard_penjual');
							break;
						case 'pembeli' :
							redirect('pembeli/dashboard_pembeli');
						
						default:
							// code...
							break;
					}
				}

			}
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect('auth/login');
		}
	}
