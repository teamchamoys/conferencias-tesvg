<?php


require_once "conexion.php";

/**
 * Usuarios Modelo
 */
class ModeloUsuarios
{

  /*=============================================>>>>>
  = REGISTRO USUARIOS =
  ===============================================>>>>>*/
  static public function mdlRegistroUsuario($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (numero_control, nombre, email, carrera, grupo, asisitio)
                                           VALUES (:numero_control, :nombre, :email, :carrera, :grupo, :asisitio)");
    $stmt -> bindParam(":numero_control", $datos["numero_control"], PDO::PARAM_STR);
    $stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
    $stmt -> bindParam(":carrera", $datos["carrera"], PDO::PARAM_STR);
    $stmt -> bindParam(":grupo", $datos["grupo"], PDO::PARAM_STR);
    $stmt -> bindParam(":asisitio", $datos["asisitio"], PDO::PARAM_STR);

    if ($stmt->execute()) {

      return "ok";

    } else {

      return "false";

    }

    $stmt -> close();

    $smtm = null;

  }


  static public function mdlMostrarUsuario($tabla, $item, $datos){

   $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

   $stmt -> bindParam(":".$item, $datos, PDO::PARAM_STR);

   $stmt -> execute();

   return $stmt->fetch();

   $stmt -> close();

   $stmt = null;

  }

}
