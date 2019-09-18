<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laporan</title>
	<link rel="stylesheet" href="assets/admin/bootstrap/css/bootstrap.min.css">
	<style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
    }

    .tandatangan2{
    text-align:center; margin-left:545px;
}

  </style>
</head>
<body>
	<img src="assets/upload/image/palapa2.png" style="position: absolute; width: 100px; height: auto;">
	<table style="width: 100%;">
    <tr>
      <td align="center">
        <span style="line-height: 1.6; font-weight: bold;">
          SHOWROOM PALAPA AUTO CAR JAKARTA
          <br>JAKARTA INDONESIA
        </span>
      </td>
    </tr>
  </table>

  <hr class="line-title"> 
  <p align="center" style="font-size: 16px">
    <b>LAPORAN DATA PRODUK</b> <br><br/>  
  </p>
  <table class="table table-bordered">
    <tr>
      <th>No.</th>
      <th>Nama Produk</th>
      <th>Harga</th>
      <th>Status</th>
    </tr>
 	<?php $no = 1; foreach ($produk as $row): ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $row->nama_produk ?></td>
        <td><?php echo 'Rp. ' .number_format($row->harga,0,",",",") ?></td>
        <td><?php echo $row->status_produk ?></td>
      </tr>
    <?php endforeach ?>
  </table>
  <div class="tandatangan2">
    <br/>
    Jakarta, <?php echo tanggal() ?><br/>
  	Penanggung Jawab<br/><br/><br/><br/>
  <br />
<br/><hr/>
    Admin Web   
</div>
</body>
</html>