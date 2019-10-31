<!DOCTYPE html>
<?php include('./comun/language.php'); ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php text("Para llevar");?> | Tepuy Burger</title>
    <meta name="author" content="Tepuy Burger SL">
    <meta name="keywords" content="tepuy burger a casa, delivery, deliveroo, glovo, just eat, para comer en casa, burger a domicilio, hamburguesa a domicilio
    comida a domicilio, pedir para casa">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="/assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="/assets/css/slick.css">
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-datepicker.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="/assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="/assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" media="(max-width:799px)" href="/css/style-small.css">
    <link rel="stylesheet" media="(min-width:800px)" href="/css/style-large.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141192377-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-141192377-1');
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
      <span>Top</span>
    </a>
<!-- END SCROLL TOP BUTTON -->
<?php include('./comun/header.php'); ?>
<!-- imagen de fondo -->
<section id="mu-counter-menu">
  <img src="/img/varios/delivery.png">
</section>
<!-- fin -->
<!-- Start Contact section -->
<section id="mu-contact">
  <?php include('./comun/curva.php'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-contact-area">
          <div class="mu-title">
            <span class="mu-subtitle"><?php text("Pide ya para casa");?></span>
            <h1><?php text("Con");?></h1>
            <i class="fa fa-spoon"></i>
            <span class="mu-title-bar"></span>
          </div>
          <div class="mu-contact-content">
            <div class="row align-items-center">
              <div class="col-md-3 delivery right">
                <a class = "delivery-img" href="https://glovoapp.com/es/tepuy/" target="_blank">
                  <img src="/img/delivery/glovo-logo.jpg">
                </a>
              </div>
              <div class="col-md-3 delivery middle">
                <a class = "delivery-img" href="https://deliveroo.es/es/menu/alicante/parque-avenidas-alicante/tepuy" target="_blank">
                  <img src="/img/delivery/deliveroo-logo.jpg">
                </a>
              </div>
              <div class="col-md-3 delivery middle">
                <a class = "delivery-img" href="https://www.ubereats.com/es-ES/alicante/food-delivery/tepuy-burger/LJqqE5gJRvKqp1wTvAyLpw/" target="_blank">
                  <img src="/img/delivery/uber-eats.png">
                </a>
              </div>
              <div class="col-md-3 delivery left">
                <a class = "delivery-img" href="https://www.just-eat.es/restaurants-tepuyalicante/" target="_blank">
                  <img src="/img/delivery/justeat-logo.png">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Contact section -->

<!-- Start Map section -->
<!--<section id="mu-map">
  <iframe src="/https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3128.4077757178125!2d-0.4806276843725016!3d38.362687185888504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd623708bc5eca99%3A0x272d0a5db8b66c84!2sTepuy+Burger!5e0!3m2!1ses-419!2sve!4v1519055674904" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>-->
<!-- End Map section -->

<?php include('./comun/footer.php'); ?>

<!-- jQuery library -->
<script src="/assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/assets/js/bootstrap.js"></script>
<!-- Slick slider -->
<script type="text/javascript" src="/assets/js/slick.js"></script>
<!-- Counter -->
<script type="text/javascript" src="/assets/js/waypoints.js"></script>
<script type="text/javascript" src="/assets/js/jquery.counterup.js"></script>
<!-- Date Picker -->
<script type="text/javascript" src="/assets/js/bootstrap-datepicker.js"></script>
<!-- Mixit slider -->
<script type="text/javascript" src="/assets/js/jquery.mixitup.js"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="/assets/js/jquery.fancybox.pack.js"></script>

<!-- Custom js -->
<script src="/assets/js/custom.js"></script>

</body>
</html>