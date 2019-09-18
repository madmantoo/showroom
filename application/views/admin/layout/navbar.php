<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
          <!-- MENU DASBOR -->
        <li class="active"><a href="<?= base_url('admin/dasbor'); ?>"><i class="fa fa-dashboard text-aqua"></i> <span>DASHBOARD</span></a></li>
      <!-- MENU Produk -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-car"></i> 
            <span>PRODUK</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=  base_url('admin/produk'); ?>"><i class="fa fa-table"></i> Data Produk</a></li>
          <!--   <li><a href="<?=  base_url('admin/produk/tambah'); ?>"><i class="fa fa-plus"></i> Tambah Produk</a></li> -->
            <li><a href="<?=  base_url('admin/kategori'); ?>"><i class="fa fa-tags"></i> Kategori Produk</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-bank"></i> 
            <span>PENJUALAN</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=  base_url('admin/penjualan'); ?>"><i class="fa fa-credit-card"></i> Data Penjualan</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> 
            <span>PEMBELIAN</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=  base_url('admin/beli/tambah'); ?>"><i class="fa fa-plus"></i> Tambah Data Pembelian</a></li>
            <li><a href="<?=  base_url('admin/beli'); ?>"><i class="fa fa-credit-card"></i> Data Pembelian</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> 
            <span>Laporan</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=  base_url('admin/laporan/cetak'); ?>" target="_blank"><i class="fa fa-file-pdf-o"></i> Laporan Data Produk</a></li>
            <li><a href="<?=  base_url('admin/laporan/cetak_user'); ?>" target="_blank"><i class=" fa fa-group"></i> Laporan Data User</a></li>
            <li><a href="<?=  base_url('admin/laporan/cetak_penjualan'); ?>" target="_blank"><i class=" fa fa-line-chart"></i> Laporan Data Penjualan</a></li>
            <li><a href="<?=  base_url('admin/laporan/cetak_pembelian'); ?>" target="_blank"><i class=" fa fa-bar-chart"></i> Laporan Data Pembelian</a></li>
         </ul>

        <!-- MENU USER -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-lock"></i> <span>PENGGUNA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=  base_url('admin/user'); ?>"><i class="fa fa-table"></i> Data Pengguna</a></li>
            <li><a href="<?=  base_url('admin/user/tambah'); ?>"><i class="fa fa-plus"></i> Tambah Pengguna</a></li>
          </ul>
        </li>
<!-- MENU KONFIGURASI -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-wrench"></i> <span>KONFIGURASI</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=  base_url('admin/konfigurasi'); ?>"><i class="fa fa-home"></i> Konfigurasi Umum</a></li>
            <li><a href="<?=  base_url('admin/konfigurasi/logo'); ?>"><i class="fa fa-image"></i> Konfiurasi Logo</a></li>
            <li><a href="<?=  base_url('admin/konfigurasi/icon'); ?>"><i class="fa fa-home"></i> Konfiurasi Icon</a></li>
          </ul>
        </li>        
      </ul>
    </section>
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> dashboard</a></li>
        <li class="active"><?= $title; ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">