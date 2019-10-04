<<<<<<< HEAD
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

=======
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

>>>>>>> a660aaa6729e6ff9ffab4ebc058f8c829ce6c949
?>