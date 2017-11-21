<?php 
/**
* 
*/
class pesanGroup extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pesangroup_model');
		$this->load->model('group_model');
		$this->load->model('member_model');
	}

	function index()
	{
		$data['pesan'] = $this->pesangroup_model->ambil_data();
		$this->load->view('admin/pesangroup_list',$data);
	}

	function tambah($kode_group)
	{
		$username = $this->session->userdata('username');
		$group = $this->group_model->ambil_data_id($kode_group);
		$member = $this->member_model->ambil_data_user($username);
		$data = array(
			'aksi' 				=> site_url('pesanGroup/tambah_aksi'),
			'id_pesan' 			=> set_value('id_pesan'),
			'id_member' 		=> set_value('id_member',$member->id_member),
			'kode_group'		 	=> set_value('id_barang',$group->kode_group),
			'jadwal_group' 			=> set_value('jadwal_group'),
			'lokasi_group' 			=> set_value('lokasi_group'),
			'button' 			=> 'Insert'
			);
		$this->load->view('user/pesangroup',$data);
	}
	function tambah_aksi()
	{

		$data = array(
			'id_pesan' 			=> $this->input->post('id_pesan'),
			'id_member' 		=> $this->input->post('id_member'),
			'kode_group' 		=> $this->input->post('kode_group'),
			'jadwal_group'			=> $this->input->post('jadwal_group'),
			'lokasi_group'			=> $this->input->post('lokasi_group')
			);
		$this->pesangroup_model->tambah_data($data);
		 $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pemesanan berhasil !!</div></div>");
                redirect('home/homeUser');
	}

	function delete($id)
	{
		$this->pesangroup_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
        redirect('pesangroup');
	}

	function update($id)
	{
		$pesan = $this->pesangroup_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('pesangroup/update_aksi'),
			'jadwal_group'	=> set_value('status',$pesan->jadwal_group),
			'lokasi_group'	=> set_value('status',$pesan->lokasi_group),
			'id_pesan' 			=> set_value('id_pesan',$pesan->id_pesan),
			'button' 			=> 'Update'
			);
		$this->load->view('admin/pesangroup_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'jadwal_group' 		=> $this->input->post('jadwal_group'),
			'lokasi_group' 		=> $this->input->post('lokasi_group')
			);	
		$id_pesan = $this->input->post('id_pesan');
		$this->pesangroup_model->edit_data($id_pesan,$data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('pesangroup');
	}

}

 ?>