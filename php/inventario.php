<?php
  include_once('conexion.php');

  $id = $_POST['id']
  $nombre = $_POST['nombre']
  $precio = $_POST['precio']
  $stock = $_POST['stock']

  echo "Los datos son" + "$id,$nombre,$precio,$stock";

  $conectar = con();
  $sql = "INSERT INTO productos (id, nombre, precio, stock) VALUE ('$id', '$nombre', '$precio', '$stock')"
  $result = mysqli_query($conectar, $sql)

  echo "$sql";
?>