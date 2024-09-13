<?php

/**
 *  Ejercicio 3 – Crear una página "listaPersonas.php" que muestre un listado con las personas que se
 * encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra
 *  los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes
 * generada, no se puede acceder directamente a las clases del ORM. 
*/
include_once "../configuracion.php";
include_once "../Control/AbmPersona.php";

$objAbmPersona = new AbmPersona();

$listarPersonas = $objAbmPersona->buscar(null);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Personas</title>
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
                <h3>ABM - Persona</h3>

                <table class='table table-striped'>

                <?php

                if(count($listarPersonas)>0){
                    
                    echo "<tr><th style='width:200'>DNI</th>";
                    echo "<th style='width:200;'>Apellido</th>";
                    echo "<th style='width:200;'>Nombre</th>";
                    echo "<th style='width:200;'>Fecha Nacimiento</th>";
                    echo "<th style='width:200;'>Telefono</th>";
                    echo "<th style='width:200;'>Domicilio</th>";
                    echo "<th></th></tr>";
                    foreach ($listarPersonas as $objPersona){
                
                        echo "<tr><td style='width:200;'>".$objPersona->getNroDni()."</td>";
                        echo "<td style='width:200;'>".$objPersona->getApellido()."</td>";
                        echo "<td style='width:200;'>".$objPersona->getNombre()."</td>";
                        echo "<td style='width:200;'>".$objPersona->getFechaNac()."</td>";
                        echo "<td style='width:200;'>".$objPersona->getTelefono()."</td>";
                        echo "<td style='width:200;'>".$objPersona->getDomicilio()."</td>";
                    
                        echo "<td><a class='btn btn-primary' href='autosPersona.php?DniDuenio=".$objPersona->getNroDni()."'>Autos</a></td></tr>";
                
                    }

                }else{
                    echo "<p>No hay Personas cargadas</p>";
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
 

