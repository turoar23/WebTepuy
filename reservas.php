<!DOCTYPE html>
<?php include('./comun/language.php'); ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php text("Reservar");?> | Tepuy Burger</title>
    <meta name="keywords" content="tepuy burger reservas">
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
    <!-- Matomo -->
    <script type="text/javascript">
      var _paq = window._paq || [];
      /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//analytics.tepuyburger.es/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
      })();
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
  <img src="/img/varios/reservas.jpg">
</section>
<!-- fin -->
<!-- Start Reservation section -->
<section id="mu-reservation">
  <?php include('./comun/curvaGris.php');?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-reservation-area">
          <div class="mu-title">
            <span class="mu-subtitle"><?php text("Haz una");?></span>
            <h1><?php text("Reserva");?></h1>
            <i class="fa fa-spoon"></i>
            <span class="mu-title-bar"></span>
          </div>
          <div class="mu-reservation-content">
            <!-- Tepuy Garbinet-->
            <div class="row">
              <div class="col-md-6">
                <div class="mu-about-us-left">
                  <h2>Tepuy Burger Garbinet</h2>
                  <p>
                    <span class="fa fa-map-marker"></span>
                    <span class="numeros-fuente"><a href="https://goo.gl/maps/veqg12KwFqKiHjt19" class="cell" target="_blank">Avinguda Periodista Rodolfo de Salazar, 29</a></span>
                  </p>
                  <p>
                    <span class="fa fa-phone"></span>
                    <span class="numeros-fuente"><a href="tel:+34689613051" class="cell">689 61 30 51</a></span>
                  </p>
                  <div class="reservation-btn-normal">
                    <a href=<?php text("/restaurante/garbinet");?> class="mu-reservation-btn"><?php text("Reservar");?></a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-about-us-right">
                  <img src="/img/restaurante/garbinet.jpg">
                  <div class="reservation-btn-responsive">
                    <a href=<?php text("/restaurante/garbinet");?> class="mu-reservation-btn"><?php text("Reservar");?></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Tepuy Bazan -->
            <div class="row">
              <div class="col-md-6">
                <div class="mu-about-us-left">
                  <h2>Tepuy Burger <?php text("Centro");?></h2>
                  <p>
                    <span class="fa fa-map-marker"></span>
                    <span class="numeros-fuente"><a href="https://goo.gl/maps/qPU8cEuqxS74Fty78" class ="cell" target="_blank">Calle Bazan, 47</a></span>
                  </p>
                  <p>
                    <span class="fa fa-phone"></span>
                    <span class="numeros-fuente"><a href="tel:+34670113435" class="cell">670 11 34 35</a></span>
                  </p>
                  <div class="reservation-btn-normal">
                    <a href=<?php text("/restaurante/centro");?> class="mu-reservation-btn"><?php text("Reservar");?></a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-about-us-right">
                  <img src="/img/restaurante/centro.jpg">
                  <div class="reservation-btn-responsive">
                    <a href=<?php text("/restaurante/centro");?> class="mu-reservation-btn"><?php text("Reservar");?></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Reservation section -->

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
