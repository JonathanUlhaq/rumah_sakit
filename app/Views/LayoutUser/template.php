<!DOCTYPE html>
<html lang="en">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title><?= $tittle; ?></title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">



<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>/css/sidebar/style.css">

<!-- Site Icons -->
<link rel="shortcut icon" href="<?= base_url() ?>/images/icons/ikon.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="<?= base_url() ?>/images/icon/ikon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?= base_url() ?>/css/user/bootstrap.min.css">

<!-- Site CSS -->
<link rel="stylesheet" href="<?= base_url() ?>/style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="<?= base_url() ?>/css/user/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="<?= base_url() ?>/css/user/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="<?= base_url() ?>/css/user/custom.css">

<!-- Modernizer for Portfolio -->
<script src="<?= base_url() ?>/js/user/modernizer.js"></script>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>



<?= $this->include('LayoutUser/navbar'); ?>

<?= $this->renderSection('konten'); ?>





<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-xs-12">
        <div class="widget clearfix">
          <div class="widget-title">
            <h3>Lokasi RSU Magetan</h3>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.5653137047636!2d111.33347304006814!3d-7.65500696052065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79931d36bbb739%3A0x287c4d28763f1368!2sMushola%20Al-Amanah!5e0!3m2!1sen!2sid!4v1629041528248!5m2!1sen!2sid" width="500" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div><!-- end clearfix -->
      </div><!-- end col -->

      <!-- end col -->

      <div class="col-lg-7 col-md-4 col-xs-12" style="padding-left: 400px;">
        <div class="widget clearfix">
          <div class="widget-title">
            <h3>Contact Details</h3>
          </div>

          <ul class="footer-links">
            <li><a class="text-white" href="">rsumagetan@gmail.com</a></li>
            <li><a class="text-white" href="">www.rsumagetan.com</a></li>
            <li class="text-white">PO Box 16122 Magetan Jl. Pahlawan 8007 Indonesia</li>
            <li class="text-white">+62 8132 6284</li>
          </ul><!-- end links -->
        </div><!-- end clearfix -->
      </div><!-- end col -->

    </div><!-- end row -->
  </div><!-- end container -->
</footer><!-- end footer -->

<div class="copyrights">
  <div class="container">
    <div class="footer-distributed">
      <div class="footer-left">
        <p class="footer-company-name text-white">@ Sistem Informasi Rumah Sakit Umum Magetan </p>
      </div>

      <div class="footer-right" style="padding-right: 50px;">
        <ul class="footer-links-soi">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-google"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
        </ul><!-- end links -->
      </div>
    </div>
  </div><!-- end container -->
</div><!-- end copyrights -->

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="<?= base_url() ?>/js/user/all.js"></script>
<!-- ALL PLUGINS -->
<script src="<?= base_url() ?>/js/user/custom.js"></script>
<script src="<?= base_url() ?>/js/user/timeline.min.js"></script>

<script>
  timeline(document.querySelectorAll('.timeline'), {
    forceVerticalMode: 700,
    mode: 'horizontal',
    verticalStartPosition: 'left',
    visibleItems: 4
  });
</script>