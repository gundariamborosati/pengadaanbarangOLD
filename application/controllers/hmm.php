	function input(){
		{
			$data = array(
				'nama_perusahaan' => $this->m_ulasan->ambilDataPerusahaanVendor(),
				// 'hak_akses' => $this->m_suratkeluarcust->ambilDataUsernameLogist(),
				
			);
			
         $this->load->view('template/header');
		$this->load->view('customer/input_ulasan',$data);
		$this->load->view('template/footer');
    }  

	function inputUlasan(){


		 $tanggal  = $this->input->post('tanggal');
		  $nama_perusahaan  = $this->input->post('dari_vendor');
		   $rating  = $this->input->post('rating');
         $komentar  = $this->input->post('komentar');
        $data = array(
        'tanggal' => $tanggal,
        'dari_vendor' => $nama_perusahaan,
        'rating' => $rating,
        'komentar' => $komentar,
        'username' => $this->session->userdata('username')
        );
        $this->m_ulasan->inputUlasan($data, 'ulasan');
        redirect('c_ulasan/viewUlasan');   
       }
  }