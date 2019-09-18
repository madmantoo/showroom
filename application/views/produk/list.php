<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(<?= base_url() ?>assets/upload/image/banner/tes.jpeg);">
<h2 class="l-text2 t-center">
<?= $title; ?>
</h2>
<p class="m-text13 t-center">
<?=  $site->namaweb; ?> | <?= $site->tagline; ?>
</p>
</section>


<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
<div class="container">
<div class="row">
	<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
		<div class="leftbar p-r-20 p-r-0-sm">
			<!--  -->
			<h4 class="m-text14 p-b-7">
				Kategori Produk
			</h4>

			<ul class="p-b-54">
				<?php foreach($listing_kategori as $listing_kategori) { ?>
				<li class="p-t-4">
					<a href="<?= base_url('produk/kategori/'.$listing_kategori->slug_kategori); ?>" class="s-text13 active1">
						<?= $listing_kategori->nama_kategori; ?>
					</a>
				</li>
				<?php } ?>
				
			</ul>

			
		</div>
	</div>

	<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
		

		<!-- Product -->
		<div class="row">
			<?php foreach($produk as $produk) { ?>
			<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
				
		<!-- Block2 -->
		<div class="block2">
			<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
				<img src="<?= base_url('assets/upload/image/thumbs/'.$produk->gambar); ?>" alt="<?= $produk->nama_produk; ?>">

			</div>



					<div 
					class="block2-txt p-t-20">
						<a href="<?= base_url('produk/detail/'.$produk->slug_produk); ?>" class="block2-name dis-block s-text3 p-b-5">
							<?= $produk->nama_produk; ?>
						</a>

						<span class="block2-price m-text6 p-r-5">
							Rp. &nbsp;<?= number_format($produk->harga,'0',',','.'); ?>
						</span>
					</div>
				</div>
			</div>
			<?php } ?>
			
		</div>

		<!-- Pagination -->
		<div class="pagination flex-m flex-w p-t-26">
			<?= $pagin; ?>
		</div>
	</div>
</div>
</div>
</section>

