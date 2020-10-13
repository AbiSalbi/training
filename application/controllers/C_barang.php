<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_barang extends CI_Controller
{
	
	public function Index()
	{
		$data['data']= $this->M_barang->tampil_data('jual');
		$this->load->view('V_barang', $data);
	}

	public function edit_data($id) 
	{
		$data['data'] = $this->M_barang->Tampil_dataEdit($id);
		$this->load->view('V_editData', $data);
	}

	public function proses_editData($id)
	{
		$jenis_barang = $_POST['jenis_barang'];
		$nama_barang = $_POST['nama_barang'];
		$harga_barang = $_POST['harga_barang'];
		$total_barang = $_POST['total_barang'];
		$total_harga = $_POST['total_harga'];
		$metode_pembayaran = $_POST['metode_pembayaran'];

		if ($metode_pembayaran == ('cash')) {

			$metode_pembayaran = 'cash';
		}
		else{

			$metode_pembayaran = 'debit';	
		}


		$data = array('jenis_barang' => $jenis_barang, 'nama_barang' => $nama_barang, 'harga_barang' => $harga_barang, 'total_barang' => $total_barang, 'total_harga' => $total_harga, 'metode_pembayaran' => $metode_pembayaran);

		$edit = $this->M_barang->Update_data($data,$id);

		if($edit > 0){

			redirect('C_barang/index');
		}
		
	}


	public function hapus_data($id)
	{
		$hapus = $this->M_barang->hapus_data($id);

			if ($hapus > 0){

				redirect('C_barang/index');

			}else{

				echo "Gagal Di Hapus!";
			}
	}

	public function Tambah_data()
	{
		$this->load->view('V_tambahData');
	}


	public function proses_tambahData()
	{
		$jenis_barang = $_POST['jenis_barang'];
		$nama_barang = $_POST['nama_barang'];
		$harga_barang = $_POST['harga_barang'];
		$total_barang = $_POST['total_barang'];
		$total_harga = $_POST['total_harga'];
		$metode_pembayaran = $_POST['metode_pembayaran'];

		if ($metode_pembayaran == ('cash')) {

			$metode_pembayaran = 'cash';
		}
		else{

			$metode_pembayaran = 'debit';	
		}


		$data = array('jenis_barang' => $jenis_barang, 'nama_barang' => $nama_barang, 'harga_barang' => $harga_barang, 'total_barang' => $total_barang, 'total_harga' => $total_harga, 'metode_pembayaran' => $metode_pembayaran);

		$this->M_barang->M_tambahData('jual', $data);

		redirect('C_barang/index');

	}
}