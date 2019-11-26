<!DOCTYPE html>
<?php include('./comun/language.php'); ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tepuy Burger</title>
    <meta name="description" content="Tepuy Burger es un restaurante de hamburguesas y arepas en Alicante, España. Optamos por una comida de calidad y casera, cuidando cada detalle para que cada visita sea una experiencia diferente">
    <meta name="keywords" content="Tepuy, Tepuy Burger, tepuy,tepuyburger, tepuy burger, hamburguesas, mejores hamburguesas alicante, hamburgueseria, arepas, entrantes, hamburguesas en España, hamburguesas en alicante, hamburguesas delivery, hamburguesas delivery España, hamburguesas delivery alicante, Restaurante en España, Restaurante en alicante, Restaurante delivery, Restaurante delivery en España, Restaurante delivery alicante, arepas en España, arepas en alicante, arepas delivery, arepas delivery España, arepas delivery alicante, postres España, postres en alicante, postres delivery, postres delivery en España, postres delivery en alicante.">
    <meta name="author" content="Tepuy Burger SL">
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
    <link rel="stylesheet" href="/css/style-popup.css">
    
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
  
  <?php /*include('./popup.php'); */?>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
      <span>Top</span>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <?php include('./comun/header.php'); ?>

  <!-- Start slider  -->
  <section id="mu-slider">
    <div class="mu-slider-area">
      <!-- Top slider -->
      <div class="mu-top-slider">
        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <!--<img src="assets/img/slider/1.jpg" alt="img">-->
          <img src="/img/banner1.png" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <!--<span class="mu-slider-small-title">Bienvenido</span>-->
            <h1 class="mu-slider-title"><?php text('Bienvenido');?></h1>
            <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.</p>-->
            <a href=<?php text('/menu');?> class="mu-readmore-btn"><?php text('Ver menu');?></a>
            <a href=<?php text('/reservas');?> class="mu-readmore-btn"><?php text('Reservar');?></a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
      </div>
    </div>
  </section>
  <!-- End slider  -->
  <!-- Content -->
  <section id="mu-about-us">
    <?php include('./comun/curva.php'); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">
            <div class="row">
              <div class="col-md-6">
                <div class="mu-about-us-left">
                  <img src=<?php text("/img/hamburguesas-index.png")?> alt="hamburguesas-index" style="width: 99%">
                  <p>
                    <?php text("text-cuerpo-index");?>
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-about-us-right">
                  <img src="/img/logo-pared-index2.png">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End content -->
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

  <script src="/assets/js/popup.js"></script>

  </body>
</html>
