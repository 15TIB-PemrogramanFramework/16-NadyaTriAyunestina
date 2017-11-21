<?php 
/**
* 
*/
class wedding_model extends CI_Model
{
	public $admin			= 'admin';
	public $wedding			= 'wedding';
	public $id				= 'kode_wedding';
	public $order			= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function cek_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->admin)->row();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->wedding)->result();//banyak data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->wedding,$data);
	}


	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->wedding);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->wedding,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->wedding)->row();
	}
}
 ?>