<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model
{
	public function tampil_data($jual)
	{
		$get = $this->db->get($jual);
		return $get->result_array();
	}

	public function tampil_dataEdit($id)
 	{
		$this->db->where('kode_barang', $id);
		$get = $this->db->get('jual');
		return $get->row();
	}

	public function Update_data($data,$id)
	{
		$this->db->where('kode_barang', $id);
		$edit = $this->db->update('jual', $data);
		return $edit;
	}

	public function Hapus_data($id)
	{
		$this->db->where('kode_barang', $id);
		$hapus = $this->db->delete('jual');
		return $hapus;
	}

	public function M_tambahData($tabel_name, $data)
	{
		$tambah = $this->db->insert($tabel_name, $data);
		return $tambah;
	}
}