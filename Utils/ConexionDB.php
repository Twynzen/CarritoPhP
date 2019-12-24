<?php

 class ConexionDB{

    //El metodo que conecta a la base de datos
    public function getConexion(){

        $cnx = new PDO ("mysql:host=localhost;dbname=tienda","root","");
        return $cnx;
    }

}

?>