<?php 
/**
* 
*/
class Pesan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pesan_model');
		$this->load->model('prawedding_model');
		$this->load->model('member_model');
	}

	function index()
	{
		$data['pesan'] = $this->pesan_model->ambil_data();
		$this->load->view('admin/pesan_list',$data);
	}

	function tambah($kode_prawedding)
	{
		$username = $this->session->userdata('username');
		$prawedding = $this->prawedding_model->ambil_data_id($kode_prawedding);
		$member = $this->member_model->ambil_data_user($username);
		$data = array(
			'aksi' 				=> site_url('pesan/tambah_aksi'),
			'id_pesan' 			=> set_value('id_pesan'),
			'id_member' 		=> set_value('id_member',$member->id_member),
			'kode_prawedding'		 	=> set_value('id_barang',$prawedding->kode_prawedding),
			'jadwal_prawedding' 			=> set_value('jadwal_prawedding'),
			'lokasi_prawedding' 			=> set_value('lokasi_prawedding'),
			'button' 			=> 'Insert'
			);
		$this->load->view('user/pesanPrawedding',$data);
	}
	function tambah_aksi()
	{

		$data = array(
			'id_pesan' 			=> $this->input->post('id_pesan'),
			'id_member' 		=> $this->input->post('id_member'),
			'kode_prawedding' 		=> $this->input->post('kode_prawedding'),
			'jadwal_prawedding'			=> $this->input->post('jadwal_prawedding'),
			'lokasi_prawedding'			=> $this->input->post('lokasi_prawedding')
			);
		$this->pesan_model->tambah_data($data);
		 $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pemesanan berhasil !!</div></div>");
                redirect('home/homeUser');
	}

	function delete($id)
	{
		$this->pesan_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
        redirect('pesan');
	}

	function update($id)
	{
		$pesan = $this->pesan_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('pesan/update_aksi'),
			'jadwal_prawedding'	=> set_value('status',$pesan->jadwal_prawedding),
			'lokasi_prawedding'	=> set_value('status',$pesan->lokasi_prawedding),
			'id_pesan' 			=> set_value('id_pesan',$pesan->id_pesan),
			'button' 			=> 'Update'
			);
		$this->load->view('admin/pesan_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'jadwal_prawedding' 		=> $this->input->post('jadwal_prawedding'),
			'lokasi_prawedding' 		=> $this->input->post('lokasi_prawedding')
			);	
		$id_pesan = $this->input->post('id_pesan');
		$this->pesan_model->edit_data($id_pesan,$data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('pesan');
	}

}

 ?>