<?php
function con() {
  $conexion = mysql_connect("localhost", "root", "", "proyecto");
  return $conexion;
} 
?>