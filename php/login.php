<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');  


$us = ($_GET['usuario']);
$pas = ($_GET['password']);
$jsondata = array();

if($us=='erick' && $pas=='123'){
    $jsondata = array(
        'msg' => 'ok'
    );
}

if(isset($_GET['callback'])){
    /*Si es una petición cross-domain (JSONP), devolvemos 
    en la respuesta el identificador de la petición. */
    echo $_GET['callback'].'('.json_encode($jsondata).')';
} else{
    // Si es una peticion normal (JSON)
    echo json_encode("Ahorita no joven");
}
?>
