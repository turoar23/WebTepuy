<?php

  // Por defecto
  include 'locale/es.php';
  include 'locale/en.php';

  $locale="es_ES";
  $textos=$es_ES;
  // Vemos si esta en ingles
  if(substr($_SERVER['REQUEST_URI'],0,4)=="/en/"){
    $locale="en_EN";
    $textos=$en_EN;
    echo "<html lang=\"en\">\n";
  }else
    echo "<html lang=\"es\">\n";
  // Comprobaciones y demas
  function text($texto){
    $array=$GLOBALS['textos'];

    if(isset($array[$texto]))
      print($array[$texto]);
    else
      print($texto);
  }
?>
