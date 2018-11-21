<?php
/**
*
*/
class Rute_model extends CI_Model
{
	public $nama_table 	= 'rute';
	public $id			= 'no';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_data(){
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table)->result();
}
	//mengambil data per id untuk edit data
	function ambil_data_id($id){
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row();
}

	function cek_login($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->nama_table)->row();
		}


	//untuk insert data seluruh mahasiswa
	function tambah_data($data){
		return $this->db->insert($this->nama_table,$data);
	}

	//untuk hapus data seluruh mahasiswa
	function hapus_data($id){
		$this->db->where($this->id,$id);
		$this->db->delete($this->nama_table);

	}
	//edit data
	function edit_data($id,$data){
		$this->db->where($this->id,$id);
		$this->db->update($this->nama_table,$data);

	}
}
?>
