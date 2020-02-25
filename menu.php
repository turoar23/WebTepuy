<?php include('./comun/before.php'); ?>
<!DOCTYPE html>
<?php include('./comun/language.php'); ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu | Tepuy Burger</title>
    <meta name="author" content="Tepuy Burger SL">
    <meta name="description" content="Nuestro menú es casero, logrando una mezcla única de sabores venezolanos y españoles">
    <meta name="keywords" content="tepuy burger menu, menu tepuy, menu tepuy burger, tequeños alicante, tequeños españa, arepas">
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
    <link rel="canonical" href="https://tepuyburger.es/menu" />

    <!-- Cookies -->
    <?php include('./comun/cookies.php');?>

    <!-- Main style sheet -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" media="(max-width:799px)" href="/css/style-small.css">
    <link rel="stylesheet" media="(min-width:800px)" href="/css/style-large.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    
  </head>
  <body>

  <?php include('./comun/windowcookies.php');?>
  
  <?php include('./popup.php'); ?>
  
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
      <span>Top</span>
    </a>
<!-- END SCROLL TOP BUTTON -->
<?php include('./comun/header.php'); ?>
<!-- imagen de fondo -->
<section id="mu-counter-menu">
  <img src="/img/varios/menu.jpg">
</section>
<!-- fin -->
<!-- Start Restaurant Menu -->
<section id="mu-restaurant-menu">
  <?php include('./comun/curva.php'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-restaurant-menu-area">
          <div class="mu-title">
            <span class="mu-subtitle"><?php text('Descubre');?></span>
            <h1><?php text('Nuestra carta');?></h1>
            <i class="fa fa-spoon"></i>
            <span class="mu-title-bar"></span>
          </div>
          <div class="mu-restaurant-menu-content">
            <ul class="nav nav-tabs mu-restaurant-menu">
              <li class="active"><a href="#limitada" data-toggle="tab"><?php text("Especial");?></a></li>
              <!--<li class="active"><a href="#entrantes" data-toggle="tab"><?php text("Entrantes");?></a></li>-->
              <li><a href="#entrantes" data-toggle="tab"><?php text("Entrantes");?></a></li>
              <li><a href="#burgers" data-toggle="tab"><?php text("Hamburguesas");?></a></li>
              <li><a href="#burgers-pollo" data-toggle="tab"><?php text("Hamburguesas de pollo");?></a></li>
              <li><a href="#arepas" data-toggle="tab">Arepas</a></li>
              <li><a href="#menu-del-dia" data-toggle="tab"><?php text("Menú del dia");?></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
            <div class="tab-pane fade in active" id="limitada">
                <div class="mu-tab-content-area">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mu-tab-content-left">
                        <ul class="mu-menu-item-nav">
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/anuncios/perritos/caraqueño.jpg" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Caraqueño</h4>
                                <span class="mu-menu-price">€4,50</span>
                                <p>Base de salsa Equis, salchicha, queso cheddar rallado, salsa Beety y cebollino</p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/anuncios/perritos/gocho.jpg" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Gocho</h4>
                                <span class="mu-menu-price">€4,50</span>
                                <p>Base de salsa Tepuy, salchicha, salsa de queso, bacon y cebolla frita</p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                   <div class="col-md-6">
                     <div class="mu-tab-content-right">
                        <ul class="mu-menu-item-nav">
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/anuncios/perritos/maracucho.jpg" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Maracucho</h4>
                                <span class="mu-menu-price">€4,5</span>
                                <p>Salchicha, pico de gallo, queso parmesano y salsa Maracucha</p>
                              </div>
                            </div>
                          </li>
                        </ul>
                     </div>
                   </div>
                 </div>
               </div>
              </div>
              <div class="tab-pane fade " id="entrantes">
                <div class="mu-tab-content-area">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mu-tab-content-left">
                        <ul class="mu-menu-item-nav">
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/entrantes/patatas-bacon.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading"><?php text("Patatas fritas con bacon y cheddar");?></h4>
                                <span class="mu-menu-price">€6,5</span>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/entrantes/entrante-nachos.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Nachos Anaya</h4>
                                <span class="mu-menu-price">€9,5</span>
                                <p><?php text("menu-nachos-desc");?></p>
                                <p class="texto-naranja"><?php text("Los más recomendados de la casa");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/entrantes/entrante-provocativos.png" alt="img">
                             </div>
                             <div class="media-body">
                               <h4 class="media-heading">Los provocativos</h4>
                               <span class="mu-menu-price">7€</span>
                               <p><?php text("menu-provocativos-desc");?></p>
                             </div>
                           </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/entrantes/entrante-chicken-tenders.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Chicken tenders</h4>
                                <span class="mu-menu-price">6,5€</span>
                                <p><?php text("Tiras de pechuga de pollo empanizadas y fritas");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/entrantes/entrante-trio-empanaditas.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Trio de empanaditas</h4>
                                <span class="mu-menu-price">6€</span>
                                <p><?php text("menu-empanaditas-desc");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/entrantes/entrante-arepitas.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Mini arepitas</h4>
                                <span class="mu-menu-price">7,5€</span>
                                <p><?php text("menu-arepitas-desc");?></p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                   <div class="col-md-6">
                     <div class="mu-tab-content-right">
                        <ul class="mu-menu-item-nav">
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/entrantes/entrante-trio-criollo.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Trío criollo</h4>
                                <span class="mu-menu-price">9,8€</span>
                                <p><?php text("menu-trio-crollo-desc");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/entrantes/entrante-alitas.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading"><?php text("Alitas de pollo");?></h4>
                                <span class="mu-menu-price">€7,5</span>
                                <p><?php text("menu-alitas-desc");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/entrantes/entrante-ensalada-burrata.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Ensalada de burrata fresca</h4>
                                <span class="mu-menu-price">7,5€</span>
                                <p><?php text("menu-ensalada-burrata-desc");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/entrantes/entrante-ensalada-provolone.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Ensalada provolone</h4>
                                <span class="mu-menu-price">7,5€</span>
                                <p><?php text("menu-ensalada-provolone-desc");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/tequeños.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Tequeños</h4>
                                <span class="mu-menu-price">€7,5</span>
                                <p><?php text("menu-tequenos-desc");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                           <div class="media">
                             <div class="media-left">
                               <img class="media-object" src="/img/entrantes/entrante-tequemix.png" alt="img">
                             </div>
                             <div class="media-body">
                               <h4 class="media-heading">Tequemix</h4>
                               <span class="mu-menu-price">€7,5</span>
                               <p><?php text("Mixto de tequeños y tequechapas para que no tengas que elegir");?></p>
                             </div>
                           </div>
                         </li>
                        </ul>
                     </div>
                   </div>
                 </div>
               </div>
              </div>
              <div class="tab-pane fade " id="burgers">
                <div class="mu-tab-content-area">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mu-tab-content-left">
                        <ul class="mu-menu-item-nav">
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/burgers/hamburguesa-corleone.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Corleone</h4>
                                <span class="mu-menu-price">€12</span>
                                <p><?php text("menu-corleone-desc");?></p>
                                <p class="texto-naranja"><?php text("No hablamos de negocios en la mesa");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                  <img class="media-object" src="/img/burgers/hamburguesa-vegetariana.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading"><?php text("Vegetariana");?></h4>
                                <span class="mu-menu-price">€9,5</span>
                                <p><?php text("menu-vege-desc");?></p>
                                <p class="texto-naranja"><?php text("Hazla vegana con la opción Areburger");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                  <img class="media-object" src="/img/burgers/hamburguesa-inglesa.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">La inglesa</h4>
                                <span class="mu-menu-price">€9,5</span>
                                <p><?php text("Queso cheddar, bacon y huevo frito");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                           <div class="media">
                             <div class="media-left">
                                 <img class="media-object" src="/img/burgers/hamburguesa-rey-arturo.png" alt="img">
                             </div>
                             <div class="media-body">
                               <h4 class="media-heading">Rey Arturo</h4>
                               <span class="mu-menu-price">€10</span>
                               <p><?php text("menu-rey-desc");?></p>
                             </div>
                           </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/burgers/hamburguesa-tovar.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Tovar</h4>
                                <span class="mu-menu-price">€12,5</span>
                                <p><?php text("menu-tovar-desc");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/burgers/hamburguesa-cheeseburger.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Cheeseburger <span class="numeros-fuente">2.0</span></h4>
                                <span class="mu-menu-price">€8,5</span>
                                <p><?php text("menu-cheese-desc");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                  <img class="media-object" src="/img/burgers/hamburguesa-avoicator.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Avocaitor</h4>
                                <span class="mu-menu-price">€11,2</span>
                                <p><?php text("menu-avocaitor-desc");?></p>
                                <p class="texto-naranja"><?php text("Sabemos que deseas aguacate");?></p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                   <div class="col-md-6">
                     <div class="mu-tab-content-right">
                        <ul class="mu-menu-item-nav">
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/burgers/hamburguesa-beety-miranda.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">La beety miranda</h4>
                                <span class="mu-menu-price">€10</span>
                                <p><?php text("Salsa Beety, bacon, cebollino y queso cheddar");?></p>
                                <p class="texto-naranja"><?php text("La que arrasa en Instagram");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/burgers/hamburguesa-gloriosa.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">La gloriosa</h4>
                                <span class="mu-menu-price">€10,5</span>
                                <p><?php text("menu-gloriosa-desc");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                  <img class="media-object" src="/img/burgers/hamburguesa-gaby.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">La gaby burger</h4>
                                <span class="mu-menu-price">€9,5</span>
                                <p><?php text("menu-gaby-desc");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                  <img class="media-object" src="/img/burgers/hamburguesa-caprichosa.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">La caprichosa</h4>
                                <span class="mu-menu-price">€10</span>
                                <p><?php text("Queso cabra, mermelada de tomate y cebolla crunch");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                  <img class="media-object" src="/img/burgers/hamburguesa-habanera.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">La habanera</h4>
                                <span class="mu-menu-price">€12,5</span>
                                <p><?php text("menu-habanera-desc");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/burgers/hamburguesa-ei-ou.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">EI-OU</h4>
                                <span class="mu-menu-price">€14,5</span>
                                <p><?php text("menu-ei-ou-desc");?></p>
                                <p class="texto-naranja">The big one</p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                  <img class="media-object" src="/img/burgers/hamburguesa-andale.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Ándale</h4>
                                <span class="mu-menu-price">€10,5</span>
                                <p><?php text("menu-andale-desc");?></p>
                                <p class="texto-naranja"><?php text("Si amas el picante, pídela con más");?></p>
                              </div>
                            </div>
                          </li>
                        </ul>
                     </div>
                   </div>
                 </div>
               </div>
              </div>
              <div class="tab-pane fade " id="burgers-pollo">
                <div class="mu-tab-content-area">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mu-tab-content-left">
                        <ul class="mu-menu-item-nav">
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/burgers/hamburguesa-campera.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Campera</h4>
                                <span class="mu-menu-price">€9</span>
                                <p><?php text("menu-campera-desc");?></p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                   <div class="col-md-6">
                     <div class="mu-tab-content-right">
                        <ul class="mu-menu-item-nav">
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/burgers/hamburguesa-tenderburger.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Tender burger</h4>
                                <span class="mu-menu-price">€8,5</span>
                                <p><?php text("Tiras de pollo empanizadas y fritas, queso cheddar, salsa mielmostaza, tomate y lechuga");?></p>
                              </div>
                            </div>
                          </li>
                        </ul>
                     </div>
                   </div>
                 </div>
               </div>
              </div>
              <div class="tab-pane fade " id="arepas">
                <div class="mu-tab-content-area">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mu-tab-content-left">
                        <ul class="mu-menu-item-nav">
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/arepa-sifrina.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Sifrina</h4>
                                <span class="mu-menu-price">€7</span>
                                <p><?php text("Mezcla de aguacate, pollo, mahonesa y queso cheddar");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                  <img class="media-object" src="/img/arepa-pelua.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">La pelúa</h4>
                                <span class="mu-menu-price">€7</span>
                                <p><?php text("Carne mechada y queso cheddar");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/burgers/arepa-despeinada.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Despeinada</h4>
                                <span class="mu-menu-price">€7,5</span>
                                <p><?php text("menu-despeinada-desc");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                <img class="media-object" src="/img/arepas/arepa-islena.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Isleña</h4>
                                <span class="mu-menu-price">€7</span>
                                <p><?php text("menu-isleña-desc");?></p>
                                <p class="texto-naranja"><?php text("¿Me extrañabas?");?></p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                   <div class="col-md-6">
                     <div class="mu-tab-content-right">
                        <ul class="mu-menu-item-nav">
                          <li>
                            <div class="media">
                              <div class="media-left">
                                  <img class="media-object" src="/img/arepa-rumbera-remix.jpg" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">la rumbera remix</h4>
                                <span class="mu-menu-price">€7</span>
                                <p><?php text("menu-rumbera-remix-desc");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                  <img class="media-object" src="/img/arepas/arepa-reina-pepiada.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Reina pepiada</h4>
                                <span class="mu-menu-price">€7</span>
                                <p><?php text("Mezcla de aguacate, pollo y mahonesa");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                  <img class="media-object" src="/img/burgers/arepa-domino.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Dominó</h4>
                                <span class="mu-menu-price">€7</span>
                                <p><?php text("menu-domino-desc");?></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">
                                  <img class="media-object" src="/img/burgers/arepa-coromoto.png" alt="img">
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Coromoto</h4>
                                <span class="mu-menu-price">€7</span>
                                <p><?php text("menu-coromoto-desc");?></p>
                                <p class="texto-naranja"><?php text("Creamos la arepa vegana");?></p>
                              </div>
                            </div>
                          </li>
                        </ul>
                     </div>
                   </div>
                 </div>
               </div>
              </div>
              <div class="tab-pane fade " id="menu-del-dia">
                <div class="mu-tab-content-area">
                  <div class="row" style="width:100%;">
                    <img class="menu-dia" style="margin-left:15px;" src=<?php text("/img/menu-dia/nuevo/menu-es.jpg");?>>
                   </div>
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
<!-- End Restaurant Menu -->

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
