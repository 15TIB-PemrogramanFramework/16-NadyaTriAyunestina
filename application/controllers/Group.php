	<?php 
	/**
	* 
	*/
	class Group extends CI_Controller
	{
		var $limit=10;
		var $offset=10;
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('group_model');
			$this->load->helper(array('url'));
		}

		function index($page=NULL,$offset='',$key=NULL)
		{
			//print_r($this->prodi_model->ambil_data());
			$data['group'] = $this->group_model->ambil_data();
			$this->load->view('admin/group_list',$data);
		}
		function group(){
			$data['group'] = $this->group_model->ambil_data();
			$this->load->view('group',$data);
		}
		function groupMember(){
			$data['group'] = $this->group_model->ambil_data();
			$this->load->view('user/group',$data);
		}

		function tambah()
		{
			$data = array(
				'aksi' 					=> site_url('group/tambah_aksi'),
				'paket_group' 			=> set_value('paket_group'),
				'deskripsi_group' 			=> set_value('deskripsi_group'),
				'harga_group' 			=> set_value('deskripsi_group'),
				'kode_group' 			=> set_value('kode_group'),
				'button' 				=> 'Insert'
				);
			$this->load->view('admin/group_form',$data);
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
	        			'gambar_group' 			=>$gbr['file_name'],
						'paket_group' 			=> $this->input->post('paket_group'),  
						'deskripsi_group' 		=> $this->input->post('deskripsi_group'),
						'harga_group' 		=> $this->input->post('harga_group')               
	        			);
	                $this->group_model->tambah_data($data); //akses model untuk menyimpan ke database

	                //pesan yang muncul jika berhasil diupload pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
	                redirect('group'); //jika berhasil maka akan ditampilkan view upload
	            }else{
	                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
	            	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
	                redirect('group_form'); //jika gagal maka akan ditampilkan form upload
	            }
	        }


	        $data = array(
				'paket_group' 	=> $this->input->post('paket_group'),
				'deskripsi_group' 	=> $this->input->post('deskripsi_group'),
				'harga_group' 		=> $this->input->post('harga_group'), 
				'kode_group' 		=> $this->input->post('kode_group')     
	        	);
	        $this->group_model->tambah_data($data);
	        redirect(site_url('group'));
	    }

	    function delete($id)
	    {
	    	$this->group_model->hapus_data($id);
	    	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
	    	redirect('group');
	    }

	    function update($id)
	    {
	    	$group = $this->group_model->ambil_data_id($id);
	    	$data = array(
				'aksi' 					=> site_url('group/update_aksi'),
				'paket_group' 			=> set_value('paket_group',$group->paket_group),
				'deskripsi_group' 	=> set_value('deskripsi_group',$group->deskripsi_group),
				'harga_group' 		=> set_value('harga_group',$group->harga_group),  
				'kode_group' 			=> set_value('kode_group',$group->kode_group),
				'button' 				=> 'Update'
	    		);
	    	$this->load->view('admin/group_form',$data);		
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
	        			'gambar_group' 				=>$gbr['file_name'],
						'paket_group' 	=> $this->input->post('paket_group'),
						'deskripsi_group' 	=> $this->input->post('deskripsi_group'),
						'harga_group' 	=> $this->input->post('harga_group')              
	        			);
	        		$kode_group = $this->input->post('kode_group');
	                $this->group_model->edit_data($kode_group	,$data); //akses model untuk menyimpan ke database

	                //pesan yang muncul jika berhasil diupload pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
	                redirect('group'); //jika berhasil maka akan ditampilkan view upload
	            }else{
	                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
	            	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
	                redirect('group_form'); //jika gagal maka akan ditampilkan form upload
	            }
	        }
	    }	}

	?>