<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');  

$usuario = ($_GET['usuario']);
$password = ($_GET['password']);
$nombre = ($_GET['nombre']);
$apellidos = ($_GET['apellidos']);
$correo = ($_GET['correo']);
$tipo = ($_GET['tipo']);

$jsondata = array();
$host = 'mysql';
$dbname = 'libreria';
$user = 'root';
$pass = 'root';

$conn = mysqli_connect($host, $user, $pass, $dbname);

$sql= "INSERT INTO login (usuario, contrasena, nombre, apellido, correo, tipo_usuario) VALUES ('$usuario', '$password', '$nombre', '$apellidos', '$correo', '$tipo')";
if(mysqli_query($conn, $sql)){
    $jsondata = array('msg' => 'ok');
}

if($_GET['callback']){
    /*Si es una petición cross-domain (JSONP), devolvemos 
    en la respuesta el identificador de la petición. */
    echo $_GET['callback'].'('.json_encode($jsondata).')';
} else{
    // Si es una peticion normal (JSON)
    echo json_encode("Ahorita no joven");
}
mysqli_close($conn);
?>