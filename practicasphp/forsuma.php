<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma</title>
</head>
<body>

    <form action="forsuma.php" method="POST" >
        <table>
            <tr>
                <td>
                    <label for="">Numero 1:</label>
                    <input type="text " name="num1">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="">Numero 2:</label>
                    <input for="" name="num2"></input>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Sumar">
                </td>
            </tr>
        </table>
    </form>

    <?php

    if($_POST){

        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];

        $suma = $n1 + $n2;
        echo("La suma de $n1 y $n2 es:" . $suma);
    }
    ?>


</body>
</html>