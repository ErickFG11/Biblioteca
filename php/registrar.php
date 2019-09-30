<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');  

$usuario = ($_GET['usuario']);
$nombre = ($_GET['nombre']);
$apellidos = ($_GET['apellidos']);
$correo = ($_GET['correo']);
$password = ($_GET['password']);
$tipo = ($_GET['tipo']);

$jsondata = array();
$host = 'mysql';
$dbname = 'libreria';
$user = 'root';
$pass = 'root';


$conn = mysqli_connect($host, $user, $pass, $dbname);
    if (mysqli_connect_errno()){
            echo "Error de conexión: ".mysqli_connect_errno();
        }   
$query = mysqli_query($conn, "insert into login (usuario, contrasena, nombre, apellido, correo, tipo_usuario) values ('$usuario', '$password', '$nombre' '$apellidos', '$correo', '$tipo');");
        if($query){
            $jsondata = array('msg' => 'ok');
        }
if(isset($_GET['callback'])){
    /*Si es una petición cross-domain (JSONP), devolvemos 
    en la respuesta el identificador de la petición. */
    echo $_GET['callback'].'('.json_encode($jsondata).')';
} else{
    // Si es una peticion normal (JSON)
    echo json_encode("Ahorita no joven");
}
mysqli_close($conn);
?>