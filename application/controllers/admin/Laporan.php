<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Laporan extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
        $this->load->model('produk_model');
        $this->load->model('kategori_model');
        $this->load->model('konfigurasi_model');
        $this->load->model('user_model');
        $this->load->model('beli_model');
    }

    public function index()
    {

    $produk = $this->produk_model->listing();

    $data = array(      'title' => 'Cetak Laporan',
                        'produk'  => $produk,
                        'isi'   => 'admin/laporan/list'
                );
        $this->load->view('admin/layout/wrapper',$data, FALSE);
    }

    public function cetak()
    {
        $data['produk'] = $this->produk_model->listing();

        $this->load->library('mypdf');
        $this->mypdf->generate('admin/laporan/dompdf',$data);
    }

    public function cetak_user()
    {

        $data['users'] = $this->user_model->get_user();

        $this->load->library('mypdf');
        $this->mypdf->generate('admin/laporan/lap_user',$data);
    }

    public function cetak_penjualan()
    {
        $data['produk'] = $this->produk_model->terjual();

        $this->load->library('mypdf');
        $this->mypdf->generate('admin/laporan/lap_penjualan',$data);
    }

    public function cetak_pembelian()
    {
        $data['produk'] = $this->produk_model->pembelian();

        $this->load->library('mypdf');
        $this->mypdf->generate('admin/laporan/lap_pembelian',$data);
    }    
}