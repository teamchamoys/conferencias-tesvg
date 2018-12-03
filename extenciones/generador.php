<?php
// include QR_BarCode class
include "QR_BarCode.php";

// QR_BarCode object
$qr = new QR_BarCode();

$texto=$_POST['mensaje'];
// create text QR code
$qr->text($texto);

// display QR code image
$qr->qrCode();

$qr->qrCode(350,'images/cw-qr.png');
