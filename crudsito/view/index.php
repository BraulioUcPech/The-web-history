<?php
include('../config/connection.php');
$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/style.css" rel="stylesheet">
    <title>CRUD</title>
</head>

<body>
    <div class="users-form">
    <h1>Crear usuario</h1>
    <form action="insert_user.php" method="POST" class="form-group">
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Nombre">
        </div>

        <div class="form-group">
            <input type="text" name="country" class="form-control" placeholder="Email">
        </div>
        <input type="submit" class="btn btn-primary" value="Agregar">
    </form>
</div>

<div class="users-table">
    <h2>Usuarios</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td>
                            <?= $row['id'] ?>
                        </td>
                        <td>
                            <?= $row['name'] ?>
                        </td>
                        <td>
                            <?= $row['country'] ?>
                        </td>
                        <td><a href="update.php?id=<?= $row['id'] ?>" class="btn btn-primary">Editar</a></td>
                        <td><a href="delete_user.php?id=<?= $row['id'] ?>" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>