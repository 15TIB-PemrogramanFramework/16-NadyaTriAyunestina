<?php 
/**
* 
*/
class konfirmasi_model extends CI_Model
{
	public $konfirmasi		= 'konfirmasi';
	public $id				= 'id_konfirmasi';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('konfirmasi.id_konfirmasi, pesan.id_pesan, member.nama_member, konfirmasi.rek_nama, konfirmasi.met_transfer, konfirmasi.bukti_transfer');
        $this->db->from('konfirmasi');
        $this->db->join('pesan', 'konfirmasi.id_pesan = pesan.id_pesan');
        $this->db->join('member', 'pesan.id_member = member.id_member');
		$query = $this->db->get();
		return $query->result();
	}
	
	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->konfirmasi)->row();//1 data
	}
/**
	function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('files');
        $this->db->where('status','1');
        $this->db->order_by('created','desc');
        if(array_key_exists('id',$params) && !empty($params['id'])){
            $this->db->where('id',$params['id']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
        //return fetched data
        return $result;
    }*/
}
 ?>