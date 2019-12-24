<!DOCTYPE html>
<?php
session_start();

$lista=$_SESSION['lista'];
echo sizeof($lista);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CATALOGO PRODUCTOS</title>
    <h1>Catalogo de productos<h1>
    
</head>
<body >
    
</body>
</html>
<!--Index envia un op el valor 1 a tienda DAO 
y llama a MetodosDao el metodo para listar productos
 y se envia a catalogo, Catalogo muestra los productos-->