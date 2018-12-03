<!DOCTYPE html>
<html>
<head>
<title>Conferencias TESVG</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Order Tracking Form Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<meta name="description" content="Registro a las conferencias de la semana del administrador 2018">

<?php
  $url = Ruta::ctrRuta();
  echo '<link rel="icon" href="'.$url.'/vistas/img/icon.ico">';
 ?>


<!--=============================================
= CSS PLUGINS =
===============================================-->
<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/flexslider.css">
<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/sweetalert.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">




<!--=============================================
= JS PLUGINS =
===============================================-->
<script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>
<script src="<?php echo $url; ?>vistas/js/plugins/bootstrap.min.js"></script>
<script src="<?php echo $url; ?>vistas/js/plugins/jquery.easing.js"></script>
<script src="<?php echo $url; ?>vistas/js/plugins/jquery.scrollUp.js"></script>
<script src="<?php echo $url; ?>vistas/js/plugins/jquery.flexslider.js"></script>
<script src="<?php echo $url; ?>vistas/js/plugins/sweetalert.min.js"></script>
<script src="<?php echo $url; ?>vistas/js/plugins/md5-min.js"></script>

</head>

<body>

<?php

$rutas = array();

$ruta = null;

if(isset($_GET["ruta"])){

	$rutas = explode("/", $_GET["ruta"]);

  if ($rutas[0] == "registro-alumnos") {

    include "modulos/registro-alumnos.php";

  } else  if ($rutas[0] == "confirmacion") {

      include "modulos/confirmacion.php";

  }

} else {

  include "modulos/inicio.php";

  }
?>


<input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">

<script src="<?php echo $url; ?>vistas/js/registro.js"></script>


</body>
</html>
