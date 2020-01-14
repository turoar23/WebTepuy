<?php
  /**
   * El procedimiento es el siguiente: si no hay la cookie 'pop-up' se establece
   * y se carga el pop-up del evento. Si ya esta establecida, no se carga.
   * La idea de esto es que carga solo al inicio de la sesion, asi si va navegando no tiene porque ver
   * todo el tiempo el pop-up. Pero una vez termina la sesion, la proxima vez si le aparece
   */
  // Comprobamos si la cookie esta puesta
  if(!isset($_COOKIE['pop-up'])){
    include('./comun/popup.php');  
  } 
?>