<?php
include "conect.php";

$usuario = ($_GET['usuario']);
$password = ($_GET['password']);
$nombre = ($_GET['nombre']);
$apellidos = ($_GET['apellidos']);
$correo = ($_GET['correo']);
$tipo = ($_GET['tipo']);

$jsondata = array();

$sql= "INSERT INTO login (usuario, contrasena, nombre, apellido, correo, tipo_usuario) VALUES ('$usuario', '$password', '$nombre', '$apellidos', '$correo', '$tipo')";
if(mysqli_query($conn, $sql)){
    $jsondata = array('msg' => 'ok');
}

if($_GET['callback']){
    echo $_GET['callback'].'('.json_encode($jsondata).')';
} else{
    echo json_encode("Ahorita no joven");
}
mysqli_close($conn);
?>