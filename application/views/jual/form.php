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
	//Notif Error
 echo form_open(base_url('jual/tambah'),' class="col-md-6 p-b-30"');  ?>
<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
<div class="container">
<div class="row">

<div class="col-md-6 p-b-30">
		<!-- Leave a comment -->
		<form class="leave-comment">
			<h4 class="m-text25 p-b-14">
				Form Jual Mobil
			</h4>

			<p class="s-text8 p-b-40">
				Kami Beli Mobil Lama Anda
			</p>

			<div class="bo12 of-hidden size19 m-b-20">
				<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="merk" placeholder="Merk Mobil *" value="<?= set_value('merk'); ?>" required>
			</div>

			<div class="bo12 of-hidden size19 m-b-20">
				<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="tahun" placeholder="tahun Mobil *" value="<?= set_value('tahun'); ?>" required>
			</div>

			<div class="bo12 of-hidden size19 m-b-20">
				<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="harga" placeholder="Harga *" value="<?= set_value('harga'); ?>" required>
			</div>

			<div class="bo12 of-hidden size19 m-b-30">
				<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="transmisi" placeholder="Transmisi *" value="<?= set_value('transmisi'); ?>" required>
			</div>

			<div class="bo12 of-hidden size19 m-b-30">
				<input class="sizefull s-text7 p-l-18 p-r-18" type="number" name="kilometer" placeholder="Kilometer *" value="<?= set_value('kilometer'); ?>" >
			</div>

			<div class="bo12 of-hidden size19 m-b-30">
				<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="pajak" placeholder="Pajak Hidup/Mati *" value="<?= set_value('pajak'); ?>" required>
			</div>
			
			<textarea class="dis-block s-text7 size18 bo12 p-l-18 p-r-18 p-t-13 m-b-20" name="keterangan" placeholder="Jelaskan dengan detail kondisi mobilmu..." value="<?= set_value('keterangan'); ?>"></textarea>

			<h4 class="m-text25 p-b-14">
				Data Pribadi
			</h4>	

			<div class="bo12 of-hidden size19 m-b-30">
				<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="nama" placeholder="Nama Lengkap *" value="<?= set_value('nama'); ?>" required>
			</div>

			<div class="bo12 of-hidden size19 m-b-30">
				<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="no_telp" placeholder="No Hp/telp *" value="<?= set_value('no_telp'); ?>" required>
			</div>

			<p class="s-text8 p-b-40">
				Proses Validasi Data Max 1 Hari<br/>
				Tim Aprisial kami akan datang pada hari ke 2<br/>
				Pembayaran bersamaan dengan pengecekan dari tim validasi<br/>
				Jika Harga cocok dan sesuai dengan keiinginan penjual...
			</p>
			<div class="w-size24">
				<!-- Button -->
				<button class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
					Kirim
				</button>
			</div>

	</form>
	<?php form_close(); ?>
</div>
</div>
</div>	
</section>

