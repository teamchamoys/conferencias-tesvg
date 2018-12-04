<?php

  /* USUARIOS AJAX */
  require_once "../controladores/usuarios.controlador.php";
  require_once "../modelos/usuarios.modelo.php";
  require_once "../extenciones/PHPMailer/PHPMailerAutoload.php";
  require_once "../extenciones/QR_BarCode.php";
  /**
   * AJAX USUARIOS
   */
  class AjaxUsuariosRegistro
  {

    /*=============================================>>>>>
    = VALIDAR EMAIL EXISTENTE =
    ===============================================>>>>>*/
    public $nombre;
    public $numeroControl;
    public $email;
    public $carrera;
    public $grupo;

    public function ajaxIngresarDatos(){

      $datos = array('nombre' => $this->nombre,
                     'numero_control' => $this->numeroControl,
                     'email' => $this->email,
                     'carrera' => $this->carrera,
                     'grupo' => $this->grupo,
                     'asisitio' => 1
                   );

      $respuesta = ControladorUsuarios::ctrRegistroUsuario($datos);

      if ($respuesta == "ok") {

        // QR_BarCode object
        $qr = new QR_BarCode();
        //
        $texto = $datos['numero_control'];
        // create text QR code
        $qr->text($texto);
        // display QR code image
        $qr->qrCode(350,'../vistas/img/usuariosqr/'.$datos["numero_control"].'.png');

        date_default_timezone_set("America/Mexico_City");

        $mail = new PHPMailer;

        $mail->CharSet = 'UTF-8';

        $mail->isMail();

        $mail->setFrom('tesvg2018@gmail.com', 'TESVG');

        $mail->addReplyTo('tesvg2018@gmail.com', 'TESVG');

        $mail->Subject = "Código QR de la semana del administrador 2018 TESVG";

        $mail -> addAddress($datos["email"]);

        $mail->addAttachment('../vistas/img/usuariosqr/'.$datos["numero_control"].'.png', "QR");

        $mail -> msgHTML('

          <div style="background:#eee; position: relative; font-family: sans-serif; padding-bottom: 40px;">
            <center>
              <img style="padding:20px; width:10%;" src="http://chamoysteam.xyz/conferencia/img/vistas/plantilla/logoTutorias.png" alt="">
            </center>

            <div style="position:relative; margin:auto; width:600px; background:white; padding:20px;">
              <center>
                <img style="padding: 20px; width:15%;" src="http://chamoysteam.xyz/conferencia/img/qr.png" alt="">
                <h3 style="font-weight:100; color:#999">Tu Código QR</h3>
                <hr style="border:1px solid #ccc; width:80%">

                <h4 style="font-weight:100; color:#999; padding:0 20px;"> '.$datos["nombre"].' <strong>Esté es tu codigo QR</strong></h4>

                <br>
                <hr style="border:1px solid #ccc; width:80%">
                <h5 style="font-weight:100; color:#999;">Si no es dueño de esta cuenta en puede ignorar este correo y la cuenta se eliminara</h5>

              </center>

            </div>

           </div>
        ');

        $envio = $mail->Send();

        echo json_encode($respuesta);

      }

    }

  }
  /*=============================================>>>>>
  = INGRESAR DATOS =
  ===============================================>>>>>*/
  if(isset($_POST["nombre"])){

    $datos = new AjaxUsuariosRegistro();
    $datos -> nombre = $_POST["nombre"];
    $datos -> numeroControl = $_POST["numeroControl"];
    $datos -> email = $_POST["email"];
    $datos -> carrera = $_POST["carrera"];
    $datos -> grupo = $_POST["grupo"];
    $datos -> ajaxIngresarDatos();
  }
