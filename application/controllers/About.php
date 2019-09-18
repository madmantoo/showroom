<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$site = $this->konfigurasi_model->listing();
		$data = array(	'title'		=> 'Tentang '.$site->namaweb,
						'site'		=> $site,
						'isi'		=> 'about/detail'
						);
		$this->load->view('layout/wrapper', $data, FALSE);	
	}

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */