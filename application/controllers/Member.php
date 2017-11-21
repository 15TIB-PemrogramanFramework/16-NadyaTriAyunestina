<?php 
/**
* 
*/
class Member extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');
	}

	function index()
	{
		//print_r($this->member_model->ambil_data());
		$data['member'] = $this->member_model->ambil_data();
		$this->load->view('berhasil',$data);
	}

	function data_member()
	{
		//print_r($this->member_model->ambil_data());
		$data['member'] = $this->member_model->ambil_data();
		$this->load->view('admin/member_list',$data);
	}

	function daftar()
	{
		$data = array(
			'aksi' 			=> site_url('daftar_aksi'),
			'nama' 			=> set_value('nama'),
			'alamat' 		=> set_value('alamat'),
			'nohp' 			=> set_value('nohp'),
			'email' 		=> set_value('email'),
			'username' 		=> set_value('username'),
			'password' 		=> set_value('password'),			
			'button' 		=> 'Submit'
			);
		$this->load->view('user/registrasi',$data);
	}

	function daftar_aksi()
	{
		$data = array(
			'nama' 			=> $this->input->post('nama'),
			'alamat' 		=> $this->input->post('alamat'),
			'nohp' 			=> $this->input->post('nohp'),
			'email' 		=> $this->input->post('email'),
			'username' 		=> $this->input->post('username'),
			'password' 		=> $this->input->post('password')
			);
		$this->member_model->tambah_data($data);
		redirect('Login');
	}

	function home()
	{
		$this->load->view('user/home');
	}




/* ADMIN */

	function delete($id)
	{
		$this->member_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
		redirect(site_url('member/data_member'));
	}

	function update($id)
	{
		$member = $this->member_model->ambil_data_id($id);
		$data = array(
			'aksi' 			=> site_url('member/update_aksi'),
			'nama' 			=> set_value('nama',$member->nama),
			'alamat' 		=> set_value('alamat',$member->alamat),
			'nohp' 			=> set_value('nohp',$member->nohp),
			'email' 		=> set_value('email',$member->email),
			'username' 		=> set_value('username',$member->username),
			'password' 		=> set_value('password',$member->password),
			'button' 			=> 'Update'
			);
		$this->load->view('admin/member_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'nama' 			=> $this->input->post('nama'),
			'alamat' 		=> $this->input->post('alamat'),
			'nohp' 			=> $this->input->post('nohp'),
			'email' 		=> $this->input->post('email'),
			'username' 		=> $this->input->post('username'),
			'password' 		=> $this->input->post('password')
			);	
		$id_member = $this->input->post('id_member');
		$this->member_model->edit_data($id_member,$data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('member/data_member');
	}

	function mau_daftar()
	{
		
		$this->load->view('user/daftar');
	}
}

 ?>