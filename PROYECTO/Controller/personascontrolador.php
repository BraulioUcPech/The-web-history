<?php
//llamada al modelo
require_once ("Model/personasModelo.php");
$per = new Personas_model();
$datos = $per->get_personas();

//llamada ala vista

require_once ("View/personasvista1.php");
?>