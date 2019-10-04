<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');  


$us = ($_GET['usuario']);
$pas = ($_GET['password']);
$jsondata = array();
$host = 'mysql';
$dbname = 'libreria';
$user = 'root';
$pass = 'root';

$conn = mysqli_connect($host, $user, $pass, $dbname);
    
$query = mysqli_query($conn, "select * from login");
while($res = mysqli_fetch_array($query)){
    if($res['usuario']==$us && $res['contrasena']==$pas){
            $jsondata = array('msg' => 'ok');
        }
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
