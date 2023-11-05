<?php

include('../config/connection.php');
$con = connection();

$name = isset($_POST['name']) ? $_POST['name'] : '';
$country = isset($_POST['country']) ? $_POST['country'] : '';

$sql = "INSERT INTO Users (name, country) VALUES('$name','$country')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{
    // manejar el error aquí
}



?>