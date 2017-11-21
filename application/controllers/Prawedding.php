	<?php 
	/**
	* 
	*/
	class Prawedding extends CI_Controller
	{
		var $limit=10;
		var $offset=10;
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('prawedding_model');
			$this->load->helper(array('url'));
		}

		function index($page=NULL,$offset='',$key=NULL)
		{
			//print_r($this->prodi_model->ambil_data());
			$data['prawedding'] = $this->prawedding_model->ambil_data();
			$this->load->view('admin/prawedding_list',$data);
		}

		function prawedding(){
			$data['prawedding'] = $this->prawedding_model->ambil_data();
			$this->load->view('prawedding',$data);
		}
		function praweddingMember(){
			$data['prawedding'] = $this->prawedding_model->ambil_data();
			$this->load->view('user/prawedding',$data);
		}

		function tambah()
		{
			$data = array(
				'aksi' 					=> site_url('prawedding/tambah_aksi'),
				'paket_prawedding' 	=> set_value('paket_prawedding'),
				'deskripsi_prawedding' 	=> set_value('deskripsi_prawedding'),
				'harga_prawedding' 	=> set_value('harga_prawedding'),
				'kode_prawedding' 		=> set_value('kode_prawedding'),
				'button' 				=> 'Insert'
				);
			$this->load->view('admin/prawedding_form',$data);
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
	        			'gambar_prawedding' 				=>$gbr['file_name'],
						'paket_prawedding' 	=> $this->input->post('paket_prawedding'),
						'deskripsi_prawedding' 	=> $this->input->post('deskripsi_prawedding'),
						'harga_prawedding' 	=> $this->input->post('harga_prawedding'),               
	        			);
	                $this->prawedding_model->tambah_data($data); //akses model untuk menyimpan ke database

	                //pesan yang muncul jika berhasil diupload pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
	                redirect('prawedding'); //jika berhasil maka akan ditampilkan view upload
	            }else{
	                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
	            	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
	                redirect('prawedding_form'); //jika gagal maka akan ditampilkan form upload
	            }
	        }


	        $data = array(
				'paket_prawedding' 	=> $this->input->post('paket_prawedding'),
				'deskripsi_prawedding' 		=> $this->input->post('deskripsi_prawedding'),  
				'harga_prawedding' 		=> $this->input->post('harga_prawedding'),   
	        	);
	        $this->prawedding_model->tambah_data($data);
	        redirect(site_url('prawedding'));
	    }

	    function delete($id)
	    {
	    	$this->prawedding_model->hapus_data($id);
	    	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
	    	redirect('prawedding');
	    }

	    function update($id)
	    {
	    	$prawedding = $this->prawedding_model->ambil_data_id($id);
	    	$data = array(
				'aksi' 					=> site_url('prawedding/update_aksi'),
				'paket_prawedding' 	=> set_value('paket_prawedding',$prawedding->paket_prawedding),
				'deskripsi_prawedding' 	=> set_value('deskripsi_prawedding',$prawedding->deskripsi_prawedding),
				'harga_prawedding' 	=> set_value('harga_prawedding',$prawedding->harga_prawedding),
				'kode_prawedding' 		=> set_value('kode_prawedding',$prawedding->kode_prawedding),
				'button' 				=> 'Update'
	    		);
	    	$this->load->view('admin/prawedding_form',$data);		
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
	        			'gambar_prawedding' 				=>$gbr['file_name'],
						'paket_prawedding' 	=> $this->input->post('paket_prawedding'),
						'deskripsi_prawedding' 	=> $this->input->post('deskripsi_prawedding'),
						'harga_prawedding' 	=> $this->input->post('harga_prawedding')              
	        			);
	        		$kode_prawedding = $this->input->post('kode_prawedding');
	                $this->prawedding_model->edit_data($kode_prawedding	,$data); //akses model untuk menyimpan ke database

	                //pesan yang muncul jika berhasil diupload pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
	                redirect('prawedding'); //jika berhasil maka akan ditampilkan view upload
	            }else{
	                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
	            	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
	                redirect('prawedding_form'); //jika gagal maka akan ditampilkan form upload
	            }
	        }
	    }	}

	?>