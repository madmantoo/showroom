<?php 
	// notif
	if($this->session->flashdata('sukses')){
		echo "<div>";
		echo '<p class="alert alert-success">';
		echo $this->session->flashdata('sukses');
		echo "</div>";
	}

?>

<?php  
	// eror upload
	if(isset($error)){
		echo '<p class="alert alert-warning">';
		echo $error;
		echo '</p>';
	}
	//Notif Error
	echo validation_errors('<div class="alert alert-warning">','</div>');

 	//Form open
 	echo form_open_multipart(base_url('admin/konfigurasi'),' class="form-horizontal"'); 
?>

	<div class="form-group form-group-lg">
		<label class="col-md-2 control-label">Nama Website</label>

		<div class="col-md-5">
		<input type="text" name="namaweb" class="form-control" placeholder="Nama Website" value="<?= $konfigurasi->namaweb; ?>" required>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-2 control-label">TagLine</label>

		<div class="col-md-5">
		<input type="text" name="tagline" class="form-control" placeholder="TagLine / Moto" value="<?= $konfigurasi->tagline; ?>" required>
		</div>
	</div>	


	<div class="form-group">
		<label class="col-md-2 control-label">Email</label>

		<div class="col-md-5">
		<input type="text" name="email" class="form-control" placeholder="Email" value="<?= $konfigurasi->email; ?>" required>
		</div>
	</div>	

	<div class="form-group">
		<label class="col-md-2 control-label">Website</label>

		<div class="col-md-5">
		<input type="text" name="websites" class="form-control" placeholder="Website" value="<?= $konfigurasi->websites; ?>" required>
		</div>
	</div>		

	<div class="form-group">
		<label class="col-md-2 control-label">Facebook</label>

		<div class="col-md-5">
		<input type="text" name="facebook" class="form-control" placeholder="Facebook" value="<?= $konfigurasi->facebook; ?>" required>
		</div>
	</div>	

	<div class="form-group">
		<label class="col-md-2 control-label">Instagram</label>

		<div class="col-md-5">
		<input type="text" name="instagram" class="form-control" placeholder="Instagram" value="<?= $konfigurasi->instagram; ?>" required>
		</div>
	</div>	

	<div class="form-group">
		<label class="col-md-2 control-label">Telepon</label>

		<div class="col-md-5">
		<input type="text" name="telepon" class="form-control" placeholder="Telepon / Hp" value="<?= $konfigurasi->telepon; ?>" required>
		</div>
	</div>	

	<div class="form-group">
		<label class="col-md-2 control-label">Alamat Kantor</label>

		<div class="col-md-5">
			<textarea name="alamat" class="form-control" placeholder="Alamat Kantor">
				<?= $konfigurasi->alamat ?>
			</textarea>
		</div>
	</div>	

	<div class="form-group">
		<label class="col-md-2 control-label">Keyword SEO</label>

		<div class="col-md-5">
			<textarea name="keyword" class="form-control" placeholder="Keyword">
				<?= $konfigurasi->keyword ?>
			</textarea>
		</div>
	</div>	

	<div class="form-group">
		<label class="col-md-2 control-label">Kode MetaText</label>

		<div class="col-md-5">
			<textarea name="metatext" class="form-control" placeholder="MetaText">
				<?= $konfigurasi->metatext ?>
			</textarea>
		</div>
	</div>	

	<div class="form-group">
		<label class="col-md-2 control-label">Deskripsi Website</label>

		<div class="col-md-5">
			<textarea name="deskripsi" class="form-control" placeholder="Deskripsi Website">
				<?= $konfigurasi->deskripsi ?>
			</textarea>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-2 control-label">Rekening Pembayaran</label>

		<div class="col-md-5">
			<textarea name="rekening_pembayaran" class="form-control" placeholder="Rekening Pembayaran">
				<?= $konfigurasi->rekening_pembayaran ?>
			</textarea>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-2 control-label"></label>

		<div class="col-md-5">
			<button class="btn btn-success btn-lg" name="submit" type="submit">
				<i class="fa fa-save"></i>Simpan
			</button>
			<button class="btn btn-info btn-lg" name="reset" type="reset">
				<i class="fa fa-times"></i>Reset
			</button>
		</div>
	</div>

<?=  form_close(); ?>