<?php
require "../config/conexion.php";

class Panel
{
  public function __construct()
  {
  }
  public function tas()
  {
    $sql = "SELECT
    COUNT(*) tas
    FROM asistencias 
    WHERE DATE(asistencia) = CURDATE();";
    return ejecutarConsultaSimpleFila($sql);
  }
  public function lista()
  {
    $sql = "SELECT
    *
    FROM asistencias
    join 
    WHERE DATE(asistencia) = CURDATE();";
    return ejecutarConsultaSimpleFila($sql);
  }
}
