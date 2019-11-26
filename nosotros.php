<!DOCTYPE html>
<?php include('./comun/language.php'); ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php text('Nosotros');?> | Tepuy Burger</title>
    <meta name="author" content="Tepuy Burger SL">
    <meta name="keywords" content="tepuy burger nosotros, hamburguesas, comida casera">
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
<?php include('./comun/header.php'); ?><!-- imagen de fondo -->
<section id="mu-counter-menu">
  <img src="/img/varios/1920x750.jpg">
</section>
<!-- fin -->
<!-- Start About us -->
<section id="mu-about-us">
  <?php include('./comun/curva.php'); ?>
    <div class="row">
      <div class="col-md-12">
        <div class="mu-about-us-area">
          <div class="container">
          <div class="mu-title">
            <span class="mu-subtitle"><?php text("Un poco");?></span>
            <h2><?php text("Sobre nosotros");?></h2>
            <i class="fa fa-spoon"></i>
            <span class="mu-title-bar"></span>
          </div>
        </div>
        <div class="mu-back" style="background-color:black; color:white">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="mu-about-us-left">
                <h3><?php text("No somos fastfood");?></h3>
                <p>
                  <?php text("text-us-nsf-1");?>
                  <br><p>
                  <?php text("text-us-nsf-2");?>
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mu-about-us-right">
                <img src="/img/tepuy-frente-de-noche.png" alt="img">
              </div>
            </div>
          </div>
        </div>
      </div>
          <!--Columna dos-->
          <div class="mu-back">
          <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="mu-about-us-left">
                <img src="/img/nosotros-img2.png" alt="img">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mu-about-us-right">
                <h3><?php text('Sabores caribeños');?></h3>
                <p>
                  <?php text("text-us-sc-1");?>
                  <br><p>
                  <?php text("text-us-sc-2");?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
          <!-- -->
        </div>
      </div>
    </div>
  </div>
</section>

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
<!-- End About us -->
