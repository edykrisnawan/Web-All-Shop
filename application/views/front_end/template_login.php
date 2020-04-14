<!DOCTYPE html>
<html class="no-js">
<title>Web Pariwisata</title>
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
            <li class="active"><a href="<?=site_url('Latihan')?>">Home</a></li>
            <li><a href="#Latihan/infowisata">Info Wisata</a></li>
            <li><a href="<?=site_url('Latihan/wisatapaket')?>">Paket Wisata</a></li>
            <li><a href="#Latihan/organisasi">Organisasi</a></li>
            <li><a href="#Latihan/contact">Contact</a></li>
            <li><a href="Login">Login</a></li>
        </ul>
      </div>
    </div>
  </div>
  </section>
  <section class="courses">
      <?php $this->load->view('front_end/beranda');?>
  </section>
  <section class="courses">
      <?php $this->load->view('front_end/infowisata');?>
  </section>
  <section class="courses">
      <?php $this->load->view('front_end/organisasi');?>
  </section>
  <section class="courses">
      <?php $this->load->view('front_end/contact');?>
  </section>

</body>

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