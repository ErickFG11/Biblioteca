<?php
$servername = "mysql";
$database = "libreria";
$username = "root";
$password = "secret";

echo "Hola";
// Create connection
$conn = mysqli_connect($servername,$username,$password);

if(mysqli_connect_errno()){
	echo "Falló la conexión";
}

?>