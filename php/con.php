<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');  

$us = 1;
$sql = 'select autor from libro where id_libro='.$us.';';
$jsondata = array();

echo "hola";
// Create connection
$conn = mysqli_connect('p:localhost:33060','root','secret') or die ("Error de conexión");
echo "hola 2";

$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {
    echo $row[0];
}
?>
