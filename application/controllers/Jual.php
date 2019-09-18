<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jual extends CI_Controller {

	// load Model
	public function __construct(){
		parent::__construct();
		$this->load->model('beli_model');
		// protek halaman
	}
	// public function index()
	// {

	// 	$beli = $this->beli_model->listing();

	// 	$data = array(	'title' => 'Data Pembelian Mobil',
	// 					'beli'	=> $beli,
	// 					'isi'	=> 'admin/pembelian/list'
	// 			);
	// 	$this->load->view('admin/layout/wrapper',$data, FALSE);
		
	// }

	public function tambah(){
		// validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama Lengkap','required',
				array(	'required' => '%s harus diisi'));

		$valid->set_rules('no_telp','no_telp','required',
				array(	'required' => '%s harus diisi'));

		if($valid->run()===FALSE){
		// end validasi
		$site = $this->konfigurasi_model->listing();

		$data = array(	'title' => 'Form Jual Mobil',
						'site'  => $site,
						'isi'	=> 'jual/form'
				);
		$this->load->view('layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
		 	$data = array( 	'nama'			=> $i->post('nama'),
		 					'no_telp'		=> $i->post('no_telp'),
		 					'merk'			=> $i->post('merk'),
		 					'tahun'			=> $i->post('tahun'),
		 					'harga'			=> $i->post('harga'),
		 					'transmisi'		=> $i->post('transmisi'),
		 					'kilometer'		=> $i->post('kilometer'),
		 					'pajak'			=> $i->post('pajak'),
		 					'keterangan'	=> $i->post('keterangan'),		 					
		 					'waktu_pengajuan'	=> date('Y-m-d H:i:s')
		 					);	
		 	$this->beli_model->tambah($data);
		 	$this->session->set_flashdata('sukses', 'data telah ditambah');
		 	redirect(base_url('jual/berhasil'),'refresh');
		}
		// end masuk database
	}

	public function berhasil()
	{
		$site = $this->konfigurasi_model->listing();

		$data = array(	'title' => 'Data Berhasil Dikirim',
						'site'  => $site,
						'isi'	=> 'jual/berhasil'
				);
		$this->load->view('layout/wrapper', $data, FALSE); 
	}
	
	// //Delete User
	// public function delete($id_user){
	// 	$data = array('id_user' => $id_user);
	//  	$this->user_model->delete($data);
	//  	$this->session->set_flashdata('sukses', 'data telah dihapus');
	//  	redirect(base_url('admin/user'),'refresh');

	// } 

}

/* End of file Beli.php */
/* Location: ./application/controllers/Beli.php */