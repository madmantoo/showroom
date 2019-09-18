<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(<?= base_url() ?>assets/upload/image/banner/about.jpg);">
<h2 class="l-text2 t-center">
<?= $title; ?>
</h2>
<p class="m-text13 t-center">
<?=  $site->namaweb; ?> | <?= $site->tagline; ?>
</p>
</section>
<?php  
	if(isset($error)){
		echo '<p class="alert alert-warning">';
		echo $error;
		echo '</p>';
	}
	echo validation_errors('<div class="alert alert-warning">','</div>');
	//Notif Error ?>
<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
<div class="container">
<div class="alert alert-danger" style="text-align: center; font-size: 18px" >
  Data Behasil Dikirim<br/>
  Tunggu Tim Kami menghubungi Anda 1 x 24 Jam

<div class="row">

<div class="col-md-6 p-b-30">
</div>
</div>
</div>
</div>	
</section>

