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
    <link rel="stylesheet" href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="conteiner-fluid bg-secondary-subtle">
    <!-- Navbar -->
    <?php include_once("Estructura/Navbar.php"); ?>

    <main class="container my-5">
    <div class="conteiner-m conteiner-fluid bg-secondary-subtle">
        <div class="conteiner mx-5">
            <div class="conteiner mx-5 p-5 text-center">
                <div class="bg-light-subtle border border-2 border-secondary rounded shadow mx-5 p-5">
                <?php
                
                    if(count($listaAutos)>0){
                        echo "<h3>Autos de la persona</h3>";
                        echo "<table class='table table-striped' >";
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
                        echo "<a class='btn btn-primary' href='listarPersonas.php'>Volver</a>";
                
                    }else{
                        echo "<p>No se encontraron autos para la persona</p><a class='btn btn-primary' href='listarPersonas.php'>Volver</a>";
                    }
                ?>
                </div>

            </div>

        </div>
    </div>
    </main>
    <!-- Footer -->
     <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <?php include_once("Estructura/Footer.php"); ?>
    
</body>
</html>