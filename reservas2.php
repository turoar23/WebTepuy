<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservar | Tepuy Burger</title>
    <meta name="keywords" content="tepuy burger reservas">
    <meta name="author" content="Tepuy Burger SL">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    
    <!-- Main style sheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="(max-width:799px)" href="css/style-small.css">
    <link rel="stylesheet" media="(min-width:800px)" href="css/style-large.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>

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
  <img src="img/varios/reservas.jpg">
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
            <span class="mu-subtitle">Haz una</span>
            <h1>Reserva</h1>
            <i class="fa fa-spoon"></i>
            <span class="mu-title-bar"></span>
          </div>
          <div class="mu-reservation-content">
            <ul class="nav nav-tabs mu-restaurant-menu">
              <li class="active"><a href="#garbinet" data-toggle="tab">Garbinet</a></li>
              <li><a href="#bazan" data-toggle="tab">Centro</a></li>
            </ul>
            <!-- covermanager -->
            <div class="tab-content">
              <div class="tab-pane fade in active" id="garbinet">
                <div class="mu-tab-content-area">
                  <div class="reservas-contenido">
                    <h2>Tepuy Burger Garbinet</h2>
                    <iframe title="Reservas" src="https://www.covermanager.com/reservation/module_restaurant/Tepuy_burger/spanish" frameborder="0" height="550" width="100%" id="iFrameResizer0" scrolling="no" style="overflow: hidden; height: 479px;"></iframe>
                    <script type="text/javascript" src="https://www.covermanager.com/js/iframeResizer.min.js"></script>
                    <script type="text/javascript">iFrameResize();</script>
                    <p style="text-align:center">
                      Para reservas de más de 11 personas, llamar al número 689 61 30 51
                    </p>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="bazan">
                <div class="mu-tab-content-area">
                  <!-- cover de bazan-->
                  <div class="reservas-contenido">
                    <h2>Tepuy Burger Centro</h2>
                    <iframe title="Reservas" src="https://www.covermanager.com/reservation/module_restaurant/Tepuy-Burger-Bazan-Alicante/spanish" frameborder="0" height="550" width="100%"></iframe>
                    <script type="text/javascript" src="https://www.covermanager.com/js/iframeResizer.min.js"></script>
                    <script type="text/javascript">iFrameResize();</script>
                    <p style="text-align:center">
                      Para reservas de más de 6 personas, llamar al número 670 11 34 35
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Reservation section -->

<?php include('./comun/footer.php'); ?>

<!-- jQuery library -->
<script src="assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.js"></script>
<!-- Slick slider -->
<script type="text/javascript" src="assets/js/slick.js"></script>
<!-- Counter -->
<script type="text/javascript" src="assets/js/waypoints.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
<!-- Date Picker -->
<script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
<!-- Mixit slider -->
<script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

<!-- Custom js -->
<script src="assets/js/custom.js"></script>

</body>
</html>
<!-- End About us -->
