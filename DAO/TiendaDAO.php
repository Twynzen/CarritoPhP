<?php
//Este metodo sirve para manipular el catalogo y la cesta

//catalogo
session_start();

include './MetodosDAO.php';

$op=$_REQUEST['op'];

switch($op){
    case 1:
        unset($_SESSION['lista']);
        $objMetodo = new MetodosDAO();
        $lista = $objMetodo->ListarProductos();
        $_SESSION['lista']=$lista;
        header("Location: ../Vistas/Catalogo.php");
    break;
    case 2:
    break;
}


?>