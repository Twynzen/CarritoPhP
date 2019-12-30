<!DOCTYPE html>
<?php
session_start();
//voy a recorrer esta variable
$lista=$_SESSION['lista'];
echo sizeof($lista);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CATALOGO PRODUCTOS</title>

</head>
    <body > 
    <h2>Catalogo de productos<h2>
    <table border="0" width="700" align="center">
    <?php
    $num=0;
    foreach($lista as $reg){
        if ($num==3) {
            echo "<tr>";
            $num=1;
        }else{
            $num++;
        }
    

    ?>

    <th><img src="../Imagenes/<?php echo $red[6];?>" width="120" height="120"> </th>

    <?php

    }

    ?>
</table>
</body>
</html>
<!--Index envia un op el valor 1 a tienda DAO 
y llama a MetodosDao el metodo para listar productos
 y se envia a catalogo, Catalogo muestra los productos-->