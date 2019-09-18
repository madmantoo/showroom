<section class="content">
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo $terjual->total; ?></h3>
        <p>Penjualan</p>
      </div>
      <div class="icon">
        <i class="fa fa-bank"></i>
      </div>
      <a href="<?= base_url('admin/penjualan')?>" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?= $pembelian->total_pembelian ?></h3>

        <p>Pembelian</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="<?= base_url('admin/beli')?>" class="small-box-footer">Lihat data <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
     <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3><?= $stok->total_produk ?></h3>
        <p>Produk Aktif</p>
      </div>
      <div class="icon">
        <i class="fa fa-car"></i>
      </div>
      <a href="<?= base_url('admin/produk') ?>" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?= $user->total_user?></h3>

        <p>User Aktif</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="<?= base_url('admin/user')?>" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  
  <!-- ./col -->
</div>
<!-- /.row -->
<!-- Main row