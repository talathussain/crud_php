<?php
$data = json_decode(file_get_contents("php://input"));
include "db.php";
$sql = "UPDATE employees SET
name ='$data->name',  designation ='$data->designation'
WHERE id = $data->id ";
$qry = $conn->query($sql);
if($data->name){
}
$conn->close();
?>
