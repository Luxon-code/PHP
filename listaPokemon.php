<?php
include("conexion.php");
//insertar
$nombre = $_POST['txtNombre'];
$codigo = $_POST['txtCodigo'];
$sql="insert into prueba (nom_prueba,codigo_prueba) values ('$nombre',$codigo)";
$data = $pdo->prepare($sql);
$data->execute();
//imprime
$sql = "SELECT * FROM prueba";
$data=$pdo->prepare($sql);
$data->execute();
$info=$data->fetchAll(PDO::FETCH_ASSOC);
print_r($info);
?>