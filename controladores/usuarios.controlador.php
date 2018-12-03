<?php

  /**
   * Usuarios Controlador
   */
  class ControladorUsuarios
  {

    /*=============================================>>>>>
    = REGISTRO USUARIOS =
    ===============================================>>>>>*/
    static public function ctrRegistroUsuario($datos){

      if (isset($datos["nombre"])) {
        if (preg_match('/^[a-zA-ZñÑáéíóúÁÉíÓÚ ]*$/', $datos['nombre']) &&
               preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/', $datos['email']) &&
               preg_match('/^[0-9]*$/', $datos['numero_control'])) {

                $tabla = "usuarios";

                $respuesta = ModeloUsuarios::mdlRegistroUsuario($tabla, $datos);

                return $respuesta;

        }else {
          return "caracteres-especiales";
        }
      }
    }

    /*=============================================>>>>>
    = VALIDAR NUMERO DE CONTROL=
    ===============================================>>>>>*/
    public function ctrMostrarUsuarios($item, $datos){

        $tabla = "usuarios";

        $respuesta = ModeloUsuarios::mdlMostrarUsuario($tabla, $item, $datos);

        return $respuesta;

    }

  }
