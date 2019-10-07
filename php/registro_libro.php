<?php 
include "conect.php";

$titulo = $_GET['titulo'];
$autor = $_GET['autor'];
$editorial = $_GET['editorial'];
$precio = $_GET['precio'];
$cantidad = $_GET['cantidad'];
$portada = str_replace(" ", "_", $titulo).".jpg";

$jsondata = array();

//registro 
$sql = "INSERT INTO libro (titulo, autor, editorial, precio, cantidad, portada) VALUES ('$titulo', '$autor', '$editorial', $precio, $cantidad, '$portada')";

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