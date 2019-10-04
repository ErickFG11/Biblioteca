<?php 

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$precio = $_POST['genero'];
$cantidad = $_POST['anio'];
$portada = str_replace(" ", "_", $titulo).".jpg";

$jsondata = array();
$host = 'mysql';
$dbname = 'libreria';
$user = 'root';
$pass = 'root';

// Create connection
$conn = mysqli_connect($host,$user,$pass, $dbname);

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