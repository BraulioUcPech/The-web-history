<?php
include("../config/connection.php");
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../CSS/style.css" rel="stylesheet">
    <title>Editar usuarios</title>

</head>

<body>
    <div class="users-form">
        <form action="edit_user.php" method="POST" class="form-group">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" placeholder="Nombre" value="<?= $row['name'] ?>">
            </div>

            <div class="form-group">
                <label for="country">Correo Electronico</label>
                <input type="text" name="country" class="form-control" placeholder="País" value="<?= $row['country'] ?>">
            </div>

            <input type="submit" name="submit" class="btn btn-primary" value="Actualizar">
        </form>
    </div>
</body>

</html>