<?php

class Personas_model{

    private $db;
    private $personas;

    puclic function __construct(){

        $this->db = Conectar::conexion();
        $this-> personas = array();
    }

    public function get_personas(){
        $consultas = $this->db->query("SELECT * FROM personas");

        while($fila = $consultas->fetch_assoc()){
            $this->personas[] = $fila;
        }
        return $this->personas;
            //plefitety

    }

?>