<?php
$host = 'mysql';
$dbname = 'libreria';
$user = 'root';
$pass = 'root';

$conn = mysqli_connect($host, $user, $pass, $dbname);

$sql= "INSERT INTO login (usuario, contrasena, nombre, apellido, correo, tipo_usuario) VALUES ('panchin', '12345', 'Francisco', 'Morales', 'ads@ugto.mx', 'Administrador')";
if(mysqli_query($conn, $sql)){
    echo "ok";
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>