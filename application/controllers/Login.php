<?php 

/**
* 
*/
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->model('m_logistik');
        $this->load->model('m_direktur');
        $this->load->model('m_vendor');
        $this->load->model('m_customer');
	}

	function index() {
		$this->load->view('utama/login-page');
	}

	function validate() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cekLogistik = $this->m_logistik->cek($username, $password);
		$cekDirektur = $this->m_direktur->cek($username, $password);
		$cekVendor = $this->m_vendor->cek($username, $password);
		$cekCustomer = $this->m_customer->cek($username, $password);

		if($cekLogistik->num_rows() == 1)
		{
			foreach($cekLogistik->result() as $data){
				$sess_data['username'] = $data->username;
				$sess_data['password'] = $data->password;
				$sess_data['hak_akses'] = $data->hak_akses;
				$this->session->set_userdata($sess_data);
			}
		

			if($this->session->userdata('hak_akses') == 'logistik')
			{
				redirect('c_logistik/home');
			}else{
				$_SESSION['pesan'] = 'Maaf, kombinasi username dengan password salah.';
				$this->session->mark_as_flash('pesan');
			}
		}
		 else if($cekVendor->num_rows() == 1)
		{
			foreach($cekVendor->result() as $data){
				$sess_data['username'] = $data->username;
				$sess_data['password'] = $data->password;
				$sess_data['hak_akses'] = $data->hak_akses;
				$this->session->set_userdata($sess_data);
			}
		
			if($this->session->userdata('hak_akses') == 'vendor')
			{
				redirect('c_vendor/home');

			}else{
				$_SESSION['pesan'] = 'Maaf, kombinasi username dengan password salah.';
				$this->session->mark_as_flash('pesan');
			}
		} else if($cekCustomer->num_rows() == 1)
			{
			foreach($cekCustomer->result() as $data){
				$sess_data['username'] = $data->username;
				$sess_data['password'] = $data->password;
				$sess_data['hak_akses'] = $data->hak_akses;
				$this->session->set_userdata($sess_data);
				
			}
		
			if($this->session->userdata('hak_akses') == 'customer')
			{
				redirect('c_customer/home');

			}else{
				$_SESSION['pesan'] = 'Maaf, kombinasi username dengan password salah.';
				$this->session->mark_as_flash('pesan');
			}
		} else if ($cekDirektur->num_rows() == 1)
			{
			foreach($cekDirektur->result() as $data){
				$sess_data['username'] = $data->username;
				$sess_data['password'] = $data->password;
				$sess_data['hak_akses'] = $data->hak_akses;
				$this->session->set_userdata($sess_data);
			}
		

			if($this->session->userdata('hak_akses') == 'direktur')
			{
				redirect('c_customer/home');

			}else{
				$_SESSION['pesan'] = 'Maaf, kombinasi username dengan password salah.';
				$this->session->mark_as_flash('pesan');
			}
		}else {
			 ?>
                     <script type=text/javascript>alert("Username & Password Salah");</script>

        	<?php
			$this->index();

		}
	}
}