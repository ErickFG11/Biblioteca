<?php  
include "conect.php";

$us = ($_GET['usuario']);
$pas = ($_GET['password']);
$jsondata = array();

$query = mysqli_query($conn, "select * from login");
while($res = mysqli_fetch_array($query)){
    if($res['usuario']==$us && $res['contrasena']==$pas){
            $jsondata = array('msg' => 'ok');
        }
    }

if($_GET['callback']){
    echo $_GET['callback'].'('.json_encode($jsondata).')';
} else{
    echo json_encode("Ahorita no joven");
}
mysqli_close($conn);
?>
