<?php

  /* USUARIOS AJAX */
  require_once "../controladores/usuarios.controlador.php";
  require_once "../modelos/usuarios.modelo.php";
  /**
   * AJAX USUARIOS
   */
  class AjaxUsuarios
  {
    /*=============================================>>>>>
    = VALIDAR EMAIL EXISTENTE =
    ===============================================>>>>>*/
    static public $validarNumeroControl;

    public function ajaxValidarNumeroControl(){

      $datos = $this->validarNumeroControl;

      $respuesta = ControladorUsuarios::ctrMostrarUsuarios("numero_control", $datos);

      echo json_encode($respuesta);
    }

  }

  /*=============================================>>>>>
  = VALIDAR EMAIL EXISTENTE =
  ===============================================>>>>>*/
  if (isset($_POST["numero_control"])) {

    $valiNC = new AjaxUsuarios();

    $valiNC -> validarNumeroControl = $_POST["numero_control"];

    $valiNC -> ajaxValidarNumeroControl();

  }
