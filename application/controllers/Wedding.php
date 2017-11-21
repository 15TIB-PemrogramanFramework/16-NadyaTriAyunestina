	<?php 
	/**
	* 
	*/
	class Wedding extends CI_Controller
	{
		var $limit=10;
		var $offset=10;
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('wedding_model');
			$this->load->helper(array('url'));
		}

		function index($page=NULL,$offset='',$key=NULL)
		{
			//print_r($this->prodi_model->ambil_data());
			$data['wedding'] = $this->wedding_model->ambil_data();
			$this->load->view('admin/wedding_list',$data);
		}
		function wedding(){
			$data['wedding'] = $this->wedding_model->ambil_data();
			$this->load->view('wedding',$data);
		}
		function weddingMember(){
			$data['wedding'] = $this->wedding_model->ambil_data();
			$this->load->view('user/wedding',$data);
		}
		function tambah()
		{
			$data = array(
				'aksi' 				=> site_url('wedding/tambah_aksi'),
				'paket_wedding' 	=> set_value('paket_wedding'),
				'deskripsi_wedding' => set_value('deskripsi_wedding'),
				'harga_wedding' 	=> set_value('harga_wedding'),
				'kode_wedding' 		=> set_value('kode_wedding'),
				'button' 			=> 'Insert'
				);
			$this->load->view('admin/wedding_form',$data);
		}

		function tambah_aksi()
		{

			$this->load->library('upload');
	        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
	        $config['upload_path'] = './assets/admin/uploads/'; //path folder
	        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	        $config['max_size'] = '3072'; //maksimum besar file 3M
	        $config['max_width']  = '5000'; //lebar maksimum 5000 px
	        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
	        $config['file_name'] = $nmfile; //nama yang terupload nantinya

	        $this->upload->initialize($config);
	        
	        if($_FILES['filefoto']['name'])
	        {
	        	if ($this->upload->do_upload('filefoto'))
	        	{
	        		$gbr = $this->upload->data();
	        		$data = array(
	        			'gambar_wedding' 				=>$gbr['file_name'],
						'paket_wedding' 	=> $this->input->post('paket_wedding'),
						'deskripsi_wedding' 	=> $this->input->post('deskripsi_wedding'),
						'harga_wedding' 	=> $this->input->post('harga_wedding')          
	        			);
	                $this->wedding_model->tambah_data($data); //akses model untuk menyimpan ke database

	                //pesan yang muncul jika berhasil diupload pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
	                redirect('wedding'); //jika berhasil maka akan ditampilkan view upload
	            }else{
	                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
	            	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
	                redirect('wedding_form'); //jika gagal maka akan ditampilkan form upload
	            }
	        }


	        $data = array(
				'paket_wedding' 	=> $this->input->post('paket_wedding'),
				'deskripsi_wedding' 		=> $this->input->post('deskripsi_wedding'),
				'harga_wedding' 	=> $this->input->post('harga_wedding')     
	        	);
	        $this->wedding_model->tambah_data($data);
	        redirect(site_url('wedding'));
	    }

	    function delete($id)
	    {
	    	$this->wedding_model->hapus_data($id);
	    	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
	    	redirect('wedding');
	    }

	    function update($id)
	    {
	    	$wedding = $this->wedding_model->ambil_data_id($id);
	    	$data = array(
				'aksi' 				=> site_url('wedding/update_aksi'),
				'paket_wedding' 	=> set_value('paket_wedding',$wedding->paket_wedding),
				'deskripsi_wedding' => set_value('deskripsi_wedding',$wedding->deskripsi_wedding),
				'harga_wedding' 	=> set_value('harga_wedding',$wedding->harga_wedding),
				'kode_wedding' 		=> set_value('kode_wedding',$wedding->kode_wedding),
				'button' 				=> 'Update'
	    		);
	    	$this->load->view('admin/wedding_form',$data);		
	    }

	    function update_aksi()
	    {
			$this->load->library('upload');
	        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
	        $config['upload_path'] = './assets/admin/uploads/'; //path folder
	        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	        $config['max_size'] = '3072'; //maksimum besar file 3M
	        $config['max_width']  = '5000'; //lebar maksimum 5000 px
	        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
	        $config['file_name'] = $nmfile; //nama yang terupload nantinya

	        $this->upload->initialize($config);
	        
	        if($_FILES['filefoto']['name'])
	        {
	        	if ($this->upload->do_upload('filefoto'))
	        	{
	        		$gbr = $this->upload->data();
	        		$data = array(
	        			'gambar_wedding' 				=>$gbr['file_name'],
						'paket_wedding' 	=> $this->input->post('paket_wedding'),
						'deskripsi_wedding' 	=> $this->input->post('deskripsi_wedding'),
						'harga_wedding' 	=> $this->input->post('harga_wedding')              
	        			);
	        		$kode_wedding = $this->input->post('kode_wedding');
	                $this->wedding_model->edit_data($kode_wedding,$data); //akses model untuk menyimpan ke database

	                //pesan yang muncul jika berhasil diupload pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
	                redirect('wedding'); //jika berhasil maka akan ditampilkan view upload
	            }else{
	                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
	            	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
	                redirect('wedding_form'); //jika gagal maka akan ditampilkan form upload
	            }
	        }
	    }	}

	?>