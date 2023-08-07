<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/styles/crearEvento.css" />
    <link rel="stylesheet" href="./src/styles/header.css"/>
    <link rel="stylesheet" href="./src/styles/footer.css"/>

    <title>Crear eventos</title>
</head>

<body>

    <header>
        <div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
            </nav>

            <div class="userPass">
                <ul>
                    <!-- <li class="signIn">Sign In</li>
                    <li class="logIn">Log In</li> -->
                    <?php
                        echo $user->getcorreo();
                    ?>
                    <a href="model/logout.php">Cerrar sesion </a>
                </ul>
            </div>
        </div>
    </header>



    <div class="llenarEventos">

        
        <form class="formEventos" action="./guardarEvento.php" method="POST" enctype="multipart/form-data">
            <div>
                <h2><b>Info de tu cenote</b></h2>
                <label>Nombre del evento</label>
                <input name="nombreEvento" type="text" id="nombreEvento">

                <label>Fecha</label>
                <input name="horaEvento" type="date">

                <label>Descripción del evento</label>
                <input name="descriptionEvento" type="text">

                <label>Opcionalmente puedes pegar un mapa</label>
                <input name="ubiEvento" type="text">

                <label>Dirección del evento</label>
                <input name="directionEvento" type="text">
            </div>

            <div>
                <h2><b>Sube las fotos de tu cenote</b></h2>

                <label>Imagen 1</label>
                <input name="imagenMain" type="file" id="imagenMain">

                <label>Imagen 2</label>
                <input name="imagen2" type="file">

                <label>Imagen 3</label>
                <input name="imagen3" type="file">

                <label>Imagen 4</label>
                <input name="imagen4" type="file">

                <input name="userId" value=<?php echo $userId ?>>

                <button type="submit">CREAR CENOTE</button>
            </div>


        </form>
    </div>

    <div>


        <h2 class="textCards">CENOTES CREADOS POR TI</h2>
        <div class="containerCards">
            <?php foreach ($user->getEventsOfUser($userId) as $r): ?>
                <div class="cardEvento">
                    <?php
                    $nombreMainImg = $r->imagenMain;
                    $pathImagen = './src/imgEventos/' . $nombreMainImg;
                    ?>
                    <img src=<?php echo $pathImagen ?>>
                    <div class="cardEventoInfo">
                        <h3>
                            <?php echo $r->nombreEvento ?>
                        </h3>   

                    </div>
                </div>

            <?php endforeach; ?>

        </div>

        <?php
            $esAdmin = $user->esAdmin($userId); 
            if ($esAdmin) { 
        ?>

            <h2 class="textCards">EVENTOS POR APROBAR</h2>
            <div class="containerCards">
                
                <?php foreach ($eventos->pedirEventosToDB() as $j): ?>
                    <div class="cardEvento">
                    <?php
                    $nombreMainImg = $j->imagenMain;
                    $pathImagen = './src/imgEventos/' . $nombreMainImg;
                ?>
                    <img src=<?php echo $pathImagen ?>>
                    <div class="cardEventoInfo">
                        <h3>
                            <?php echo $j->nombreEvento ?>
                        </h3>

        
                        <form action="" method="POST">
                            <input name="eventoAprobar" style="display:none" value=<?php echo $j->idEvento ?> >
                            <button class="aprobarEvento" type="submit">Aprobar evento</button>
                        </form>
                        

                    </div>
                </div>
                <?php endforeach; ?>

            <?php } ?>
        </div>
    </div>

    <script src="./src/js/mostrar.js"></script>
</body>

</html>