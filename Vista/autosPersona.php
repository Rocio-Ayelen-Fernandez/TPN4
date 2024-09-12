<?php

include_once "../configuracion.php";
include_once "../Control/AbmPersona.php";
include_once "../Control/AbmAuto.php";

$datos = data_submitted();

$objAbmAuto = new AbmAuto();

$listaAutos = $objAbmAuto->buscar($datos);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autos Personas</title>
</head>
<body>
    <?php
    
        if(count($listaAutos)>0){
            echo "<h3>Autos de la persona</h3>";
            echo "<table border='1'>";
            echo "<tr><th style='width:200;'>Patente</th>";
            echo "<th style='width:200;'>Marca</th>";
            echo "<th style='width:200;'>Modelo</th>";
            echo "<th style='width:200;'>DniDuenio</th></tr>";
            foreach ($listaAutos as $objAuto){
        
                echo "<tr><td style='width:200;'>".$objAuto->getPatente()."</td>";
                echo "<td style='width:200;'>".$objAuto->getMarca()."</td>";
                echo "<td style='width:200;'>".$objAuto->getModelo()."</td>";
                echo "<td style='width:200;'>".$objAuto->getDniDuenio()->getNroDni()."</td></tr>";
        
            }
            echo "</table>";
    
        }else{
            echo "<p>No se encontraron autos para la persona</p>";
        }
    ?>
</body>
</html>