<?php

  $url = Ruta::ctrRuta();

?>

<link rel="stylesheet" href="<?php echo $url ?>vistas/css/styles2.css">
<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="homeHeading">Semana del Administrador <br> TESVG 2018</h1>
            <hr>
            <p>Por favor registra tus datos en el siguiente formulario!</p>
            <a href="<?php $url?>registro-alumnos" class="btn btn-primary btn-xl page-scroll">REGISTRO</a>
        </div>
    </div>
</header>
