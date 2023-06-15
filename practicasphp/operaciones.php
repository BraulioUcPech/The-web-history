<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $base = 15;
    $altura = 12;
    $area = ($base * $altura)/2;
    print("El area del triangulo es: $area" );

    
    ?>
    <br><br>

    <?php 
    $num = 9;
    if($num > 0){
        if($num % 2 == 0){
            print("El numero es par" . $num);
        }
        else{
            print("El numero es impar" . $num);
        }
    }
    
    
    ?>
<br><br>
    <?php 
    $num = 9;

    for($a = 1; $a < 10; $a++){
        echo("$num X $a =".$num * $a)
    }
    ?>
</body>
</html>