<?php 
/**
* 
*/
class pesan_model extends CI_Model
{
	public $pesan		= 'pesan';
	public $id			= 'id_pesan';
	public $id_member	= 'id_member';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('pesan.id_pesan, member.nama, prawedding.paket_prawedding, prawedding.harga_prawedding, pesan.jadwal_prawedding, pesan.lokasi_prawedding');
        $this->db->from('pesan');
        $this->db->join('member', 'pesan.id_member = member.id_member');
        $this->db->join('prawedding', 'pesan.kode_prawedding = prawedding.kode_prawedding');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->pesan,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->pesan)->row();//1 data
	}
	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->pesan);
	}
	function tambah_data($data)//array
	{
		return $this->db->insert($this->pesan,$data);
	}
	function ambil_data_pesan($id_member){
		$this->db->where($this->id_member,$id_member);
		return $this->db->get($this->pesan)->result();
	}
	
}
 ?>