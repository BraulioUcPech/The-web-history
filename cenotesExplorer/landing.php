<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kidz Events</title>

    <link rel="stylesheet" href="./src/styles/home.css" />
    <link rel="icon" type="image/png" href="./src/img/logoKidzEvents.png">


</head>
<body>
    

<header>
        <div class="headerChild">
            <img src="./src/img/logo.png"/>
            <div class="navigationAncla">
                <a href="dashboardUser.php">Mis cenotes</a>
                <a href="model/logout.php">Cerrar sesion</a>
            </div>
        </div>
    </header>

    <div class="cardInfoSecondPart">
        <div>
            <h2>
                BIENVENIDO AL<br/>
                <b>CENOTES</b> EXPLORER
            </h2>
            <h4>Conoce qué son los cenotes, 
                cómo se forman y su clasificaciónb Conoce qué son los cenotes, 
                cómo se forman y su clasificación Conoce qué son los cenotes, 
                cómo se forman y su clasificación.</h4>
            <button>Ver cenotes</button>
        </div>
        <div>
            <img src="./src/img/secondPartImg.jpg"/>
        </div>
    </div>

    <div class="infoCenotes">
        <h2>
            BIENVENIDO AL<br/>
            <b>CENOTES</b> EXPLORER
        </h2>
    </div>

    <div class="cenotesPadre">
            <?php foreach($eventos->pedirEventosAprobados() as $r): ?>
                <div class="cenoteCardd">
                    <?php 
                        $nombreMainImg = $r->imagenMain;
                        $pathImagen = './src/imgEventos/' . $nombreMainImg;
                    ?>
                    <img src=<?php echo $pathImagen ?>>
                    <div class="cardEventoInfo" >
   
                        <h3><?php echo $r->nombreEvento ?></h3>
                        <!-- <a href=<?php echo "evento.php?idEvento=". $r->idEvento ?> ><button > Ver evento </button></a> -->
                    </div>
                </div>

            <?php endforeach; ?>



    </div>
    
    <footer>
        <div class="footerChild">
            <img src="./src/img/logo.png" />
            <div>
                <h3>About us</h3> 
                <h3>FQA</h3> 
                <h3>Support</h3> 
            </div>
            <div>
                <h3>Crear</h3> 
                <h3>Favorito</h3> 
                <h3>Inicio</h3> 
            </div>
            <div>
                <h3>Facebook</h3> 
                <h3>Instagram</h3> 
                <h3>Whatsap</h3> 
            </div>
        </div>
    </footer>


</body>
</html>