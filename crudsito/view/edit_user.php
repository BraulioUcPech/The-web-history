<?php
include('../config/connection.php');
$con = connection();

if (isset($_POST['submit'])) {
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $name = $_POST['name'];
    $country = $_POST['country'];

    $sql = "UPDATE Users SET name='$name', country='$country' WHERE id='$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        Header("Location: index.php");
    } else {
        // manejar el error aquí
    }
}    

?>