<?php

/**
 * Ejercicio 3 –Crear una pagina php “VerAutos.php”, en ella usando la capa de control correspondiente
 *  mostrar todos los datos de los autos que se encuentran cargados, de los dueños mostrar nombre y apellido.
 *  En caso de que no se encuentre ningún auto cargado en la base mostrar un mensaje indicando que no hay
 *  autos cargados.
 */


include_once "../configuracion.php";
include_once "../Control/AbmAuto.php";

$objAbmAuto = new AbmAuto();

$listarAutos = $objAbmAuto->buscar(null);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Autos</title>
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
    
                <h3>ABM - Auto</h3>

                <table class="table table-striped">

                <?php

                if(count($listarAutos)>0){
                    echo "<tr><th style='width:200;'>Patente</th>";
                    echo "<th style='width:200;'>Marca</th>";
                    echo "<th style='width:200;'>Modelo</th>";
                    echo "<th style='width:200;'>DniDuenio</th>";
                    echo "<th style='width:200;'>Apellido_Duenio</th>";
                    echo "<th style='width:200;'>Nombre_Duenio</th></tr>";
                    foreach ($listarAutos as $objAuto){
                
                        
                        echo "<tr><td style='width:200;'>".$objAuto->getPatente()."</td>";
                        echo "<td style='width:200;'>".$objAuto->getMarca()."</td>";
                        echo "<td style='width:200;'>".$objAuto->getModelo()."</td>";
                        echo "<td style='width:200;'>".$objAuto->getDniDuenio()->getNroDni()."</td>";
                        echo "<td style='width:200;'>".$objAuto->getDniDuenio()->getApellido()."</td>";
                        echo "<td style='width:200;'>".$objAuto->getDniDuenio()->getNombre()."</td></tr>";
                
                    }

                }else{
                    echo "<p>No hay autos cargados</p>";
                }
                ?>

                </table>
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