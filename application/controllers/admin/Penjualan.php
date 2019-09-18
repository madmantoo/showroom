<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->model('kategori_model');
		$this->load->model('konfigurasi_model');
		// protek halaman
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$produk = $this->produk_model->terjual();

		$data = array(	'title' => 'Data Produk Terjual',
						'produk'=> $produk,
						'isi'	=> 'admin/penjualan/list'
				);
		$this->load->view('admin/layout/wrapper',$data, FALSE);		
	}
}

/* End of file Penjualan.php */
/* Location: ./application/controllers/admin/Penjualan.php */