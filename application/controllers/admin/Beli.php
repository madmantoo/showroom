<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beli extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->model('kategori_model');
		$this->load->model('konfigurasi_model');
		// protek halaman
		$this->simple_login->cek_login();
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
	public function index(){
		$produk = $this->produk_model->pembelian();

		$data = array(	'title' => 'Data Pembelian',
						'produk'	=> $produk,
						'isi'	=> 'admin/pembelian/list'
				);
		$this->load->view('admin/layout/wrapper',$data, FALSE);
	}
	public function tambah(){
		// validasi input
		$kategori = $this->kategori_model->listing();

		$valid = $this->form_validation;

		$valid->set_rules('nama_produk','Nama Produk','required',
				array(	'required' => '%s harus diisi'));

		$valid->set_rules('kode_produk','Kode Produk','required|is_unique[produk.kode_produk]',
				array(	'required' 	=> '%s harus diisi',
						'is_unique' => '%s sudah ada, buat kode produk baru'));

		if($valid->run()){
			
		$config['upload_path']	 	= './assets/upload/image/';
		$config['allowed_types']	= 'gif|jpg|jpeg|png';
		$config['max_size'] 		= '2400';
		$config['max_width'] 		= '2024';
		$config['max_height'] 		= '2024';

		$this->load->library('upload',$config);

		if( ! $this->upload->do_upload('gambar')){

		// end validasi
		$data = array(	'title' 	=> 'Tambah Data Beli',
						'kategori' 	=> $kategori,
						'error' 	=> $this->upload->display_errors(),
						'isi'		=> 'admin/pembelian/tambah'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$upload_gambar = array('upload_data'	 => $this->upload->data());


			// tumbnail gambar
			$config['image_library'] 	= 'gd2';
			$config['source_image'] 	= './assets/upload/image/'.$upload_gambar['upload_data']['file_name'];
			// lokasi thumbnail
			$config['new_image'] 		= './assets/upload/image/thumbs/';
			$config['create_thumb'] 	= TRUE;
			$config['maintain_ratio'] 	= TRUE;
			$config['width']         	= 250;
			$config['height']      	 	= 250;
			$config['thumb_marker']		= '';

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();
			// akhir thumnail

			$i = $this->input;

			$slug_produk = url_title($this->input->post('nama_produk').'-'.$this->input->post('kode_produk'),'dash',TRUE);

		 	$data = array( 	'id_user' 		=> $this->session->userdata('id_user'),
		 					'id_kategori' 	=> $i->post('id_kategori'),
		 					'kode_produk'	=> $i->post('kode_produk'),
		 					'nama_produk'	=> $i->post('nama_produk'),
		 					'slug_produk'	=> $slug_produk,
		 					'keterangan'	=> $i->post('keterangan'),
		 					'keywords'		=> $i->post('keywords'),	
		 					'harga'			=> $i->post('harga'),	
		 					'keywords'		=> $i->post('keywords'),
		 					'stok'			=> $i->post('stok'),
		 					'gambar'		=> $upload_gambar['upload_data']['file_name'],
		 					'warna'			=> $i->post('warna'),
		 					'transmisi'	=> $i->post('transmisi'),
		 					'status_produk'	=> $i->post('status_produk'),
		 					'tanggal_post'	=> date('Y-m-d H:i:s')
						);	
		 	$this->produk_model->tambah($data);
		 	$this->session->set_flashdata('sukses', 'data telah ditambah');
		 	redirect(base_url('admin/beli'),'refresh');
		}}
		// end masuk database
			$data = array(	'title' 	=> 'Tambah Data Beli',
							'kategori' 	=> $kategori,
							'isi'		=> 'admin/pembelian/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
		// edit produk
	public function edit($id_produk){
	
		$produk 	= $this->produk_model->detail($id_produk);

		$kategori 	= $this->kategori_model->listing();

		$valid 		= $this->form_validation;

		$valid->set_rules('nama_produk','Nama Produk','required',
				array(	'required' => '%s harus diisi'));

		$valid->set_rules('kode_produk','Kode Produk','required',
				array(	'required' 	=> '%s harus diisi'));

		if($valid->run()){
			if(!empty($_FILES['gambar']['name'])){
			
			$config['upload_path']	 	= './assets/upload/image/';
			$config['allowed_types']	= 'gif|jpg|jpeg|png';
			$config['max_size'] 		= '2400';
			$config['max_width'] 		= '2024';
			$config['max_height'] 		= '2024';

			$this->load->library('upload',$config);

		if( ! $this->upload->do_upload('gambar')){

		// end validasi
		$data = array(	'title' 	=> 'Edit Produk: '.$produk->nama_produk,
						'kategori' 	=> $kategori,
						'produk'	=> $produk,
						'error' 	=> $this->upload->display_errors(),
						'isi'		=> 'admin/pembelian/edit'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$upload_gambar = array('upload_data' => $this->upload->data());


			// tumbnail gambar
			$config['image_library'] 	= 'gd2';
			$config['source_image'] 	= './assets/upload/image/'.$upload_gambar['upload_data']['file_name'];
			// lokasi thumbnail
			$config['new_image'] 		= './assets/upload/image/thumbs/';
			$config['create_thumb'] 	= TRUE;
			$config['maintain_ratio'] 	= TRUE;
			$config['width']         	= 250;
			$config['height']      	 	= 250;
			$config['thumb_marker']		= '';

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();
			// akhir thumnail

			$i = $this->input;

			$slug_produk = url_title($this->input->post('nama_produk').'-'.$this->input->post('kode_produk'),'dash',TRUE);

		 	$data = array( 	'id_produk'		=> $id_produk,
		 					'id_user' 		=> $this->session->userdata('id_user'),
		 					'id_kategori' 	=> $i->post('id_kategori'),
		 					'kode_produk'	=> $i->post('kode_produk'),
		 					'nama_produk'	=> $i->post('nama_produk'),
		 					'slug_produk'	=> $slug_produk,
		 					'keterangan'	=> $i->post('keterangan'),
		 					'keywords'		=> $i->post('keywords'),	
		 					'harga'			=> $i->post('harga'),
		 					'stok'			=> $i->post('stok'),
		 					'gambar'		=> $upload_gambar['upload_data']['file_name'],
		 					'warna'			=> $i->post('warna'),
		 					'transmisi'	=> $i->post('transmisi'),
		 					'status_produk'	=> $i->post('status_produk')
						);	
		 	$this->produk_model->edit($data);
		 	$this->session->set_flashdata('sukses', 'data telah di edit');
		 	redirect(base_url('admin/beli'),'refresh');
		}}else{

			$i = $this->input;

			$slug_produk = url_title($this->input->post('nama_produk').'-'.$this->input->post('kode_produk'),'dash',TRUE);

		 	$data = array( 	'id_produk'		=> $id_produk,
		 					'id_user' 		=> $this->session->userdata('id_user'),
		 					'id_kategori' 	=> $i->post('id_kategori'),
		 					'kode_produk'	=> $i->post('kode_produk'),
		 					'nama_produk'	=> $i->post('nama_produk'),
		 					'slug_produk'	=> $slug_produk,
		 					'keterangan'	=> $i->post('keterangan'),
		 					'keywords'		=> $i->post('keywords'),	
		 					'harga'			=> $i->post('harga'),
		 					'stok'			=> $i->post('stok'),
		 					// tanpa  ganti gambar
		 					// 'gambar'		=> $upload_gambar['upload_data']['file_name'],
		 					'warna'			=> $i->post('warna'),
		 					'transmisi'		=> $i->post('transmisi'),
		 					'status_produk'	=> $i->post('status_produk')
						);	
		 	$this->produk_model->edit($data);
		 	$this->session->set_flashdata('sukses', 'data telah di edit');
		 	redirect(base_url('admin/beli'),'refresh');
		}}
		// end masuk database
			$data = array(	'title' 	=> 'Edit Produk: '.$produk->nama_produk,
							'kategori' 	=> $kategori,
							'produk'	=> $produk,
							'isi'		=> 'admin/pembelian/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
	
	public function delete($id_produk){

		$produk = $this->produk_model->detail($id_produk);
		unlink('./assets/upload/image/'.$produk->gambar);
		unlink('./assets/upload/image/thumbs/'.$produk->gambar);


		$data = array('id_produk' => $id_produk);
	 	$this->produk_model->delete($data);
	 	$this->session->set_flashdata('sukses', 'data telah dihapus');
	 	redirect(base_url('admin/beli'),'refresh');

	}
}

/* End of file Beli.php */
/* Location: ./application/controllers/admin/Beli.php */