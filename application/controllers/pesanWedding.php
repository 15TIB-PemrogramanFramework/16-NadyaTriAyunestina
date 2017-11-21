<?php 
/**
* 
*/
class pesanWedding extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pesanwedding_model');
		$this->load->model('wedding_model');
		$this->load->model('member_model');
	}

	function index()
	{
		$data['pesan'] = $this->pesanwedding_model->ambil_data();
		$this->load->view('admin/pesanwedding_list',$data);
	}

	function tambah($kode_wedding)
	{
		$username = $this->session->userdata('username');
		$wedding = $this->wedding_model->ambil_data_id($kode_wedding);
		$member = $this->member_model->ambil_data_user($username);
		$data = array(
			'aksi' 				=> site_url('pesanWedding/tambah_aksi'),
			'id_pesan' 			=> set_value('id_pesan'),
			'id_member' 		=> set_value('id_member',$member->id_member),
			'kode_wedding'		 	=> set_value('id_barang',$wedding->kode_wedding),
			'jadwal_wedding' 			=> set_value('jadwal_wedding'),
			'lokasi_wedding' 			=> set_value('lokasi_wedding'),
			'button' 			=> 'Insert'
			);
		$this->load->view('user/pesanWedding',$data);
	}
	function tambah_aksi()
	{

		$data = array(
			'id_pesan' 			=> $this->input->post('id_pesan'),
			'id_member' 		=> $this->input->post('id_member'),
			'kode_wedding' 		=> $this->input->post('kode_wedding'),
			'jadwal_wedding'			=> $this->input->post('jadwal_wedding'),
			'lokasi_wedding'			=> $this->input->post('lokasi_wedding')
			);
		$this->pesanwedding_model->tambah_data($data);
		 $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pemesanan berhasil !!</div></div>");
                redirect('home/homeUser');
	}

	function delete($id)
	{
		$this->pesanwedding_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
        redirect('pesanWedding');
	}

	function update($id)
	{
		$pesan = $this->pesanwedding_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('pesanWedding/update_aksi'),
			'jadwal_wedding'	=> set_value('status',$pesan->jadwal_wedding),
			'lokasi_wedding'	=> set_value('status',$pesan->lokasi_wedding),
			'id_pesan' 			=> set_value('id_pesan',$pesan->id_pesan),
			'button' 			=> 'Update'
			);
		$this->load->view('admin/pesanwedding_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'jadwal_wedding' 		=> $this->input->post('jadwal_wedding'),
			'lokasi_wedding' 		=> $this->input->post('lokasi_wedding')
			);	
		$id_pesan = $this->input->post('id_pesan');
		$this->pesanWEDDING_model->edit_data($id_pesan,$data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('pesanWedding');
	}

}

 ?>