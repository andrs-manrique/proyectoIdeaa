<?php
include "conexion.php";
session_start();
session_destroy();
mysql_close($conexion);

     // Redireccionar a home.php después de 5 segundos
     header( "refresh:2; url=../index.php" );

?>