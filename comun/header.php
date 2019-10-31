<!-- Start header section -->
<header id="mu-header">
  <nav class="navbar navbar-default mu-main-navbar" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- LOGO -->
        <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="Logo img"></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
          <li><a href=<?php text('/');?>><?php text('Inicio')?></a></li>
          <li><a href=<?php text('/nosotros');?>><?php text('Nosotros')?></a></li>
          <li><a href=<?php text('/menu');?>><?php text('Menu')?></a></li>
          <li><a href=<?php text('/reservas');?>><?php text('Reservar')?></a></li>
          <!--<li><a href="#mu-chef">Nuestro equipo</a></li>-->
          <li><a href=<?php text('/delivery');?>><?php text('Para llevar')?></a></li>
          <li><a href=<?php text('/contacto');?>><?php text('Contacto')?></a></li>
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href=<?php text("/");?>><?php text("ES");?></a>
              <ul class="dropdown-menu" role="menu">  
                <li><a href=<?php text("/en/");?>><?php text("EN");?></a></li>
              </ul>
            </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<!-- End header section -->
