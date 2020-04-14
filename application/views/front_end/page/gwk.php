<!DOCTYPE html>
<html class="no-js">
<title>Garuda Wisnu Kencana</title>

<head>
	<!-- BASICS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="web">
	<link href="<?php echo base_url('assets1/css/isotope.css')?>" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo base_url('assets1/js/fancybox/jquery.fancybox.css')?>" rel="stylesheet" type="text/css"
		media="screen" />
	<link href="<?php echo base_url('assets1/css/bootstrap.css')?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets1/css/bootstrap-theme.css')?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets1/css/style.css')?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets1/css/slideimage.css')?>" rel="stylesheet" type="text/css" />
	<!-- skin -->
	<link href="<?php echo base_url('assets1/skin/default.css')?>" rel="stylesheet" type="text/css" />
	<script src="http//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<!------
        ----->
</head>

<body>
	<section id="header" class="appear">
		<div class="navbar navbar-fixed-top" role="navigation"
			data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);"
			data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-bars color-white"></span>
					</button>
					<h1><a class="navbar-brand" href="<?=site_url('Latihan')?>" data-0="line-height:90px;"
							data-300="line-height:50px;"> Liburan
							Yuk!
						</a></h1>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
						<li><a href="<?=site_url('Latihan')?>">Home</a></li>
						<li><a href="<?=site_url('Latihan')?>">Info Wisata</a></li>
						<li><a href="<?=site_url('Latihan/wisatapaket')?>">Paket Wisata</a></li>
						<li><a href="<?=site_url('Latihan')?>">Organisasi</a></li>
						<li><a href="<?=site_url('Latihan')?>">Contact</a></li>
						<li><a href="<?=site_url('Latihan/login')?>">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- spacer section:stats -->
	<section id="parallax6" class="section pad-top40 pad-bot40" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="align-center pad-top40 pad-bot40">
				<blockquote class="bigquote color-white">"As you grow older, you learn a few things. One of them is to actually
					take the time you've allotted for vacation."</blockquote>
				<p class="color-white">Enjoy</p>
			</div>
		</div>
	</section>

	<!-- section works -->
	<section class="section appear clearfix">
		<div class="container">
			<div class="row mar-bot40">
				<div class="col-md-offset-3 col-md-6">
					<div class="section-header">
						<h2 class="section-heading animated" data-animation="bounceInUp">Garuda Wisnu Kencana</h2>
					</div>
				</div>
				<nav id="filter" class="col-md-12 text-center"></nav>
				<div class="col-md-12">
					<p>Objek wisata Garuda Wisnu Kencana atau terkenal dengan nama GWK Bali, merupakan salah satu tempat wisata
						terkenal di Bali. Saking terkenalnya objek wisata Garuda Wisnu Kencana Bali, hampir setiap hari tempat
						wisata GWK Bali, selalu ramai dikunjungi wisatawan domestik dan wisatawan asing. Banyak wisatawan
						mengatakan, objek wisata Garuda Wisnu Kencana, salah satu objek wisata di Bali yang harus dikunjungi.</p>

					<?php foreach($wstalam as $val) {?>
           <a><?="<img src='../upload/foto/".$val['foto']."'style='width:200px; height:200px;'>"; ?></a>
					   <?= $val['keterangan']; ?>
        <?php }?>

				</div>

				<!-- pop up untuk melakukan pemesanan -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
					data-whatever="@getbootstrap">Order Now</button>
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Form Pemesanan Paket Terkait</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
								1. Detail Pemesanan
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Nama Depan :</label>
										<input type="text" class="form-control" id="recipient-name"placeholder="Masukan nama depan">
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Nama Belakang :</label>
										<input type="text" class="form-control" id="recipient-name" placeholder="Masukan nama belakang">
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Tanggal Boking :</label>
										<input type="date" class="form-control" id="recipient-name" placeholder="Masukan Tanggal Boking">
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Nomor Telepon/HP :</label>
										<input type="text" class="form-control" id="recipient-name" placeholder="Masukan no.telepon/hp">
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Total Tamu :</label>
										<input type="text" class="form-control" id="recipient-name" placeholder="Masukan total tamu">
									</div>
									<div class="form-group">
										<label for="message-text" class="col-form-label">Alamat Email :</label>
										<textarea class="form-control" id="message-text" placeholder="Masukan alamat email"></textarea>
									</div>

								2. Pembayaran
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Metode Pembayaran :</label>
										<select class="form-control" id="recipient-name" placeholder="Masukan total tamu">
											<option value="" disabled selected>Choose your option</option>
											<option value="1">BRI</option>
											<option value="2">BNI</option>
											<option value="3">MANDIRI</option>
										</select>
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Jumlah Bayaran :</label>
										<select class="form-control" id="recipient-name" placeholder="Masukan total tamu">
											<option value="" disabled selected>Choose your option</option>
											<option value="1">DP 30%</option>
											<option value="2">Bayar Full</option>
										</select>
									</div>
									<p>Dengan klik "Proses Pemesanan" saya menyatakan data telah sesuai identitas yang masih berlaku. Saya juga telah membaca dan menyetujui Syarat & Ketentuan layanan di website ini.</p>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Proses Pemesanan</button>
							</div>
						</div>
					</div>
				</div>
	</section>

  <!-- footer -->
	<section id="footer" class="section footer">
		<div class="container">
			<div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
				<div class="col-sm-12 align-center">
					<ul class="social-network social-circle">
						<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
						<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="row align-center copyright">
				<div class="col-sm-12">
					<p>Copyright &copy; WisnawaEdy</p>
					<div class="credits">
						Designed by <a href="#">Wisnawa</a>
					</div>
				</div>
			</div>
		</div>

	</section>


	<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

	<script type='text/javascript' src="<?php echo base_url('assets1/js/modernizr-2.6.2-respond-1.1.0.min.js'); ?>">
	</script>
	<script type='text/javascript' src="<?php echo base_url('assets1/js/jquery.js'); ?>"></script>
	<script type='text/javascript' src="<?php echo base_url('assets1/js/jquery.easing.1.3.js'); ?>"></script>
	<script type='text/javascript' src="<?php echo base_url('assets1/js/bootstrap.min.js'); ?>"></script>
	<script type='text/javascript' src="<?php echo base_url('assets1/js/jquery.isotope.min.js'); ?>"></script>
	<script type='text/javascript' src="<?php echo base_url('assets1/js/jquery.nicescroll.min.js'); ?>"></script>
	<script type='text/javascript' src="<?php echo base_url('assets1/js/fancybox/jquery.fancybox.pack.js'); ?>"></script>
	<script type='text/javascript' src="<?php echo base_url('assets1/js/skrollr.min.js'); ?>"></script>
	<script type='text/javascript' src="<?php echo base_url('assets1/js/jquery.scrollTo.js'); ?>"></script>
	<script type='text/javascript' src="<?php echo base_url('assets1/js/jquery.localScroll.js'); ?>"></script>
	<script type='text/javascript' src="<?php echo base_url('assets1/js/jquery.stellar.js'); ?>"></script>
	<script type='text/javascript' src="<?php echo base_url('assets1/js/jquery.appear.js'); ?>"></script>
	<script type='text/javascript' src="<?php echo base_url('assets1/js/main.js'); ?>"></script>
	<script type='text/javascript' src="<?php echo base_url('assets1/contactform/contactform.js'); ?>"></script>
</body>

</html>