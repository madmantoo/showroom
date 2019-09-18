<?php  

$nav_produk = $this->konfigurasi_model->nav_produk();

$nav_produk_mobile = $this->konfigurasi_model->nav_produk();
?>
<div class="wrap_header">
<!-- Logo -->
<a href="<?= base_url(); ?>" class="logo">
	<img src="<?= base_url('assets/upload/image/'.$site->logo) ?>" alt="<?= $site->namaweb; ?> | <?= $site->tagline; ?>">
</a>

<!-- Menu -->
<div class="wrap_menu">
	<nav class="menu">
		<ul class="main_menu">

			<li>
				<a href="<?= base_url(); ?>">Beranda</a>
			</li>

			<li>
				<a href="<?= base_url('produk'); ?>">Beli Mobil</a>
				<ul class="sub_menu">
				<?php foreach($nav_produk as $nav_produk) { ?>
					<li><a href="<?= base_url('produk/kategori/'.$nav_produk->slug_kategori); ?>">
						<?= $nav_produk->nama_kategori; ?>
					</a></li>
				<?php } ?>
				</ul>
			</li>
			


<!-- 			<li class="sale-noti">
				<a href="product.html">Sale</a>
			</li>

			<li>
				<a href="cart.html">Features</a>
			</li>

			<li>
				<a href="blog.html">Blog</a>
			</li>

			<li>
				<a href="about.html">About</a>
			</li> -->

		<!-- 	<li>
				<a href="<?= base_url('jual/tambah'); ?>">Jual Mobil</a>
			</li>
			<li> -->
				<a href="<?= base_url('about'); ?>">Tentang Kami</a>
			</li>
		</ul>
	</nav>
</div>

<!-- Header Icon -->

</div>
</div>

<!-- Header Mobile -->
<div class="wrap_header_mobile">
<!-- Logo moblie -->
<a href="<?=  base_url(); ?>" class="logo-mobile">
	<img src="<?= base_url('assets/upload/image/'.$site->logo) ?>" alt="<?= $site->namaweb; ?> | <?= $site->tagline; ?>">
<!-- Button show menu -->
<div class="btn-show-menu">
<!-- Header Icon mobile -->
<div class="header-icons-mobile">
	<a href="#" class="header-wrapicon1 dis-block">
		
	</a>

	<span class="linedivide2"></span>
</div>

<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
	<span class="hamburger-box">
		<span class="hamburger-inner"></span>
	</span>
</div>
</div>
</div>

<!-- Menu Mobile -->
<div class="wrap-side-menu" >
<nav class="side-menu">
<ul class="main-menu">
	<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
		<span class="topbar-child1">
			<?= $site->deskripsi; ?>
		</span>
	</li>

	<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
		<div class="topbar-child2-mobile">
			<span class="topbar-email">
				<?=  $site->email; ?>
			</span>

			<div class="topbar-language rs1-select2">
				<select class="selection-1" name="time">
					<option><?=  $site->telepon; ?></option>
				</select>
			</div>
		</div>
	</li>

	<li class="item-topbar-mobile p-l-10">
		<div class="topbar-social-mobile">
			<a href="<?=  $site->facebook; ?>" class="topbar-social-item fa fa-facebook"></a>
			<a href="<?=  $site->instagram; ?>" class="topbar-social-item fa fa-instagram"></a>
		</div>
	</li>

	<li class="item-menu-mobile">
		<a href="<?= base_url(); ?>">Beranda</a>
	</li>

	<li class="item-menu-mobile">
		<a href="<?= base_url('produk'); ?>">Beli Mobil</a>
		<ul class="sub-menu">
				<?php foreach($nav_produk_mobile as $nav_produk_mobile) { ?>
					<li><a href="<?= base_url('produk/kategori/'.$nav_produk_mobile->slug_kategori); ?>">
						<?= $nav_produk_mobile->nama_kategori; ?>
					</a></li>
				<?php } ?>
		</ul>
		<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
	</li>

<!-- 	<li class="item-menu-mobile">
		<a href="product.html">Sale</a>
	</li>

	<li class="item-menu-mobile">
		<a href="cart.html">Features</a>
	</li>

	<li class="item-menu-mobile">
		<a href="blog.html">Blog</a>
	</li>

	<li class="item-menu-mobile">
		<a href="about.html">About</a>
	</li> -->
	<li class="item-menu-mobile">
		<a href="<?= base_url('jual/tambah'); ?>">Jual Mobil</a>
	</li>

	<li class="item-menu-mobile">
		<a href="<?= base_url('about'); ?>">Tentang Kami</a>
	</li>
</ul>
</nav>
</div>
</header>
