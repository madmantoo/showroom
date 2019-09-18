<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->model('kategori_model');
		// protek halaman
		$this->simple_login->cek_login();
	}


	public function index()
	{
		$terjual 	= $this->produk_model->total_penjualan();
		$stok  		= $this->produk_model->total_produk();
		$pembelian 	= $this->produk_model->total_pembelian(); 
		$user		= $this->user_model->total_user();

		$data = array(	'title' => 'Dasbor Admin',
						'terjual'	=> $terjual,
						'pembelian'	=> $pembelian,
						'stok'	=> $stok,
						'user'	=> $user,
						'isi'	=> 'admin/dasbor/list'
				);
		$this->load->view('admin/layout/wrapper',$data, FALSE);
	}

}