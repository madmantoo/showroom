
<?php 
	// notif
	if($this->session->flashdata('sukses')){
		echo "<div>";
		echo '<p class="alert alert-success">';
		echo $this->session->flashdata('sukses');
		echo "</div>";
	}
?>

<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th>NO</th>
			<th>GAMBAR</th>
			<th>NAMA</th>
			<th>KATEGORI</th>
			<th>HARGA</th>
			<th>STATUS</th>
			<th>TANGGAL TERJUAL</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($produk as $produk) { ?>
		<tr>
			<td><?= $no; ?></td>
			<td>
				<img src="<?= base_url('assets/upload/image/thumbs/'.$produk->gambar); ?>" class="img img-responsive img-thumbnail" width="60">
			</td>
			<td><?= $produk->nama_produk; ?></td>
			<td><?= $produk->nama_kategori; ?></td>
			<td><?= number_format($produk->harga,'0',',','.'); ?></td>
			<td><?= $produk->status_produk; ?></td>
			<td><?= tanggal(date($produk->tanggal_update)) ?></td>
			<td>
							 
				<?php include('delete.php'); ?>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>