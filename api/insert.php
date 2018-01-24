<?php
$data = json_decode(file_get_contents("php://input"));
include "db.php";
$sql = "INSERT INTO employees (name, designation)
VALUES ('$data->name', '$data->designation')";
if($data->name){
	$qry = $conn->query($sql);
}
$conn->close();
?>
