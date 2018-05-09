<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_logistik extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_logistik');
		$this->load->model('m_direktur');
		$this->load->model('m_customer');
		$this->load->model('m_vendor');
		$this->load->model('m_barang');
	}

	public function home(){
		$data['barang'] = $this->m_barang->getAllBarang('barang');
		$this->load->view('template/header');
		$this->load->view('logistik/view_barang',$data);
		// $this->load->view('logistik/dashboard');
		$this->load->view('template/footer');
	}

	public function viewProfile(){
		$data ['profile'] = $this->m_logistik->profileLogistik($this->session->userdata('username'));
		$this->load->view('logistik/profile',$data);
	}

	public function kelola_user(){		
		$data['vendor'] = $this->m_vendor->getAllVendor()->result();
		$data['customer'] = $this->m_customer->getAllCustomer()->result();
		$data['direktur'] = $this->m_direktur->getAllDirektur()->result();
		$data['logistik'] = $this->m_logistik->getAllLogistik()->result();

		//$data = array();
		//array_push($data,$getVendor);
		//array_push($data,$getCustomer);
		//array_push($data,$getDirektur);
		//array_push($data,$getLogistik);
		//print_r($data[0]);
		//print_r($data);
		$this->load->view('template/header');
		$this->load->view('logistik/kelola_user',$data);
		$this->load->view('template/footer');

		//print_r($getVendor->result());
		//print_r($getCustomer->result());
		//print_r($getDirektur->result());
		//print_r($getLogistik->result());
	}

	public function form_update(){
		$this->load->view('template/header');
		$this->load->view('logistik/update_pass');
		$this->load->view('template/footer');
	}
		
	public function update_password(){
		$this->form_validation->set_rules('curr_password', 'current password','required|alpha_numeric');
		$this->form_validation->set_rules('new_password', 'new password','required|alpha_numeric');
		$this->form_validation->set_rules('conf_password', 'confirm password','required|alpha_numeric');
		if($this->form_validation->run()){
			$curr_password = $this->input->post('curr_password');
			$new_password = $this->input->post('new_password');
			$conf_password = $this->input->post('conf_password');			
			$uname = $this->session->userdata('username');
			$data= $this->m_logistik->getCurrentpass($uname);					
				if($data->password == $curr_password) {			
					if($new_password == $conf_password ){
						if($this->m_logistik->update_password($new_password, $uname)){						
							?>
	                    		 <script type=text/javascript>alert("update sukses!");</script>
	        				<?php
		        			$this->load->view('template/header');
							$this->load->view('logistik/update_pass');
							$this->load->view('template/footer');
						}else{						
							?>
	                    		 <script type=text/javascript>alert("Gagal update password!");</script>
	        				<?php
	        				$this->load->view('template/header');
							$this->load->view('logistik/update_pass');
							$this->load->view('template/footer');
						}
					}else{
						?>
	                     <script type=text/javascript>alert("password baru dan confirm password tidak cocok!");</script>
	        			<?php
	        			$this->load->view('template/header');
						$this->load->view('logistik/update_pass');
						$this->load->view('template/footer');				
					}
				}else{
					?>
                     <script type=text/javascript>alert("password lama yang anda masukan salah!");</script>
        			<?php
        			$this->load->view('template/header');
					$this->load->view('logistik/update_pass');
					$this->load->view('template/footer');
				}				
		}else{
			$this->load->view('logistik/update_pass');
		}
	}

	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}
}
