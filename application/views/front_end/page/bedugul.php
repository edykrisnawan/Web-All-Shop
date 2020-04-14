<!DOCTYPE html>
<html class="no-js">
<title>Danau Beratan Bedugul Bali</title>
<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="web">
  <link href="<?php echo base_url('assets1/css/isotope.css')?>" rel="stylesheet" type="text/css" media="screen" />
  <link href="<?php echo base_url('assets1/js/fancybox/jquery.fancybox.css')?>" rel="stylesheet" type="text/css" media="screen" />
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
        <h1><a class="navbar-brand" href="<?=site_url('Latihan')?>" data-0="line-height:90px;" data-300="line-height:50px;"> Liburan
            Yuk!
          </a></h1>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li><a href="<?=site_url('Latihan')?>">Home</a></li>
          <li class="active"><a href="<?=site_url('Latihan')?>">Info Wisata</a></li>
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
<section id="parallax9" class="section pad-top40 pad-bot40" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="align-center pad-top40 pad-bot40">
        <blockquote class="bigquote color-white">"I'm not happy on vacation. In those rare times when I have three hours with no work I have to do, I'm terribly uncomfortable."</blockquote>
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
            <h2 class="section-heading animated" data-animation="bounceInUp">Danau Beratan Bedugul Bali</h2>
            
          </div>
          
        </div>
        <nav id="filter" class="col-md-12 text-center"></nav>
      <div class="col-md-12">
        <p>Danau Beratan Bedugul merupakan sebuah danau yang berada di Bali yang dikelilingi oleh bukit dan memiliki udara sejuk. Danau Beratan berada di kawasan Bedugul yang terletak di dataran tinggi dan alamnya masih asri. Tak lupa hasil panennya yang dapat Anda jadikan oleh-oleh untuk keluarga di rumah.</p>
        <p>Danau Beratan terletak Jalan Raya Candi Kuning di Desa Candi Kuning, Kecamatan Baturiti, Tabanan. Anda yang datang dari bandara I Gusti Ngurah Rai dapat menempuh perjalanan dengan kendaraan sekitar 2 jam untuk menuju lokasi. Menuju Danau Beratan, Anda akan melalui jalanan berliku dan tajam serta disamping kanan dan kiri terdapat jurang. Meski begitu, Anda tak akan bosan sebab Anda akan disuguhi pemandangan sawah dan kebun sayuran. Dan uniknya, Anda juga akan melalui sebuah hotel yang terkenal angker yakni Hotel yang tak pernah selesai, Hotel P.I Bedugul.</p>
        <p>Di tengah Danau Beratan Bedugul terdapat sebuah pura yakni Pura Ulun Danu yang memiliki stupa budha, menggambarkan keharmonisan umat agama hindu dan budha sejak zaman dulu. Stupa budha dan pura selalu dijaga dan mendapat pemeliharaan rutin sehingga kebersihannya terjaga. Pura Ulun Danu merupakan tempat pemujaan terhadap Sang Hyang Dewi Danu sebagai pemberi kesuburan. Akan sangat disayangkan apabila Anda tak berkunjung ke Pura Ulun Danu. Jika Anda datang di hari baik menurut kalender Bali, Anda mungkin akan bertemu rakyat Bali yang sedang melakukan ibadah ataupun upacara keagamaan disini.</p>
				
        <?php foreach($wstalam as $val) {?>
          <a><?="<img src='upload/foto/".$val['foto']."'style='width:200px; height:200px;'>"; ?></a>
					   <?= $val['SELECT section from keterangan WHERE id_wisata = 1']; ?>
        <?php }?>
        
        
      </div>
  </section>


  
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

<script type='text/javascript' src="<?php echo base_url('assets1/js/modernizr-2.6.2-respond-1.1.0.min.js'); ?>"></script>
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