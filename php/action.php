<?php

$conn = mysqli_connect('mysql', 'root', 'root', 'libreria') or die("Connection failed: " . mysqli_connect_error());
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit' && $input['id']) {	
	$updateField='';
	if(isset($input['titulo'])) {
		$updateField.= "titulo='".$input['titulo']."'";
	}  if(isset($input['autor'])) {
		$updateField.= "autor='".$input['autor']."'";
	}  if(isset($input['editorial'])) {
		$updateField.= "editorial='".$_POST['editorial']."'";
	}  if(isset($input['precio'])) {
		$updateField.= "precio='".$input['precio']."'";
	}  if(isset($input['cantidad'])) {
		$updateField.= "cantidad='".$input['cantidad']."'";
	} 
	if($updateField && $input['id']) {
		$sqlQuery = "update libro set $updateField where id_libro='" . $input['id'] . "'";	
		mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));	
		$data = array(
			"message"	=> "Record Updated",	
			"status" => 1
		);
		echo json_encode($data);		
	}
}
if ($input['action'] == 'delete' && $input['id']) {
	$sqlQuery = "delete from libro where id_libro='" . $input['id'] . "'";	
	mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));	
	$data = array(
		"message"	=> "Record Deleted",	
		"status" => 1
	);
	echo json_encode($data);	
}
?>