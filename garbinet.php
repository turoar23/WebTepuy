<!DOCTYPE html>
<?php include('./comun/language.php'); ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Garbinet | Tepuy Burger</title>
    <meta name="keywords" content="tepuy burger reservas, tepuy burger garbinet, tepuy burger bulevar, tepuy pla, tepuy bulevar">
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
    <!-- Canonical link -->
    <link rel="canonical" href="https://tepuyburger.es/restaurante/garbinet" />

    <!-- Main style sheet -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" media="(max-width:799px)" href="/css/style-small.css">
    <link rel="stylesheet" media="(min-width:800px)" href="/css/style-large.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>

    <?php include('./comun/cookies.php');?>
    
  </head>
  <body>

  <?php include('./comun/windowcookies.php');?>
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
            <span class="mu-subtitle">Tepuy Burger</span>
            <h1>Garbinet</h1>
            <i class="fa fa-spoon"></i>
            <span class="mu-title-bar"></span>
          </div>
          <div class="reservas-contenido">
            <iframe title="Reservas" src="https://www.covermanager.com/reservation/module_restaurant/Tepuy_burger/<?php text("spanish");?>" frameborder="0" height="550" width="100%"></iframe>
            <script type="text/javascript" src="https://www.covermanager.com/js/iframeResizer.min.js"></script>
            <script type="text/javascript">iFrameResize();</script>
            <p style="text-align:center">
              <?php text("Para reservas de más de 11 personas, llamar al número");?> <a href="tel:+34689613051" class="cell-local">689 61 30 51</a>
            </p>
            <div class="google-maps">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3128.407957504271!2d-0.4806276852981068!3d38.362682979656725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd623708bc5eca99%3A0x272d0a5db8b66c84!2sTepuy+Burger!5e0!3m2!1ses!2ses!4v1557242709306!5m2!1ses!2ses" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
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
