<?php
require_once '../config/session.php';
require_once '../models/Panel.php';

$panel = new Panel();

$error = false;
$mensaje = array();
$dbmensaje = "";

switch ($_GET["op"]) {
  case 'tas':
    $rspta = $panel->tas();
    $output = chkrspta($rspta, $conexion, "Datos obtenidos");
    break;
  case 'lista':
    $rspta = $panel->lista();
    break;
}

function chkrspta($rspta, $conexion, $msg)
{
  if ($rspta || !empty($rspta)) {
    $mensaje[] = $msg;
  } else {
    $error = true;
    $hostmensaje = error_get_last();
    $dbmensaje = mysqli_errno($conexion) . ": " . mysqli_error($conexion);
    $mensaje[] = "Ha ocurrido un error.";
  }
  return array(
    "respuesta" => $rspta,
    "error" => $error,
    "hostmensaje" => $hostmensaje,
    "mensaje" => $mensaje,
    "dbmensaje" => $dbmensaje,
  );
}

echo json_encode($output);
