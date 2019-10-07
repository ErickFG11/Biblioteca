<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header("content-type: text/javascript");

$titulo = $_POST['titulo'];
echo $titulo;

$foto = str_replace(" ", "_", $titulo).".jpg";

$dir = "../img/libros/";
$archivo=$dir.$foto;

move_uploaded_file($_FILES["image"]["tmp_name"], $archivo);
?>