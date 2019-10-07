<?php
include 'conect.php';

$valor=$_POST['search'];
$jsondata = array();

$query = mysqli_query($conn, "SELECT * FROM libro WHERE titulo LIKE '%$valor%'");
while($res = mysqli_fetch_array($query)){
    $jsondata = array('titulo' => $res['titulo'],
                      'autor' => $res['autor'],
                      'editorial' => $res['editorial'],
                      'precio' => $res['precio'],
                      'cantidad' => $res['cantidad']);   
}

if($_GET['callback']){
    echo $_GET['callback'].'('.json_encode($jsondata).')';
} else{
    echo json_encode("Ahorita no joven");
}
?>