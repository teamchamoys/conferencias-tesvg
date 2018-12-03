<?php

  /*=============================================>>>>>
  = CONTROLADORES =
  ===============================================>>>>>*/
  require_once "controladores/plantilla.controlador.php";
  require_once "controladores/usuarios.controlador.php";
  /*=============================================>>>>>
  = MODELOS =
  ===============================================>>>>>*/
  require_once "modelos/rutas.php";
  require_once "modelos/usuarios.modelo.php";

  /*=============================================>>>>>
  = PLANTILLA CONTROLADOR =
  ===============================================>>>>>*/
  $plantilla = new ControladorPlantilla();
  $plantilla -> plantillaControlador();
