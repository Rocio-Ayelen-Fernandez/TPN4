<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top p-3">
    <div class="container-fluid">

       

    
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Opciones
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php

                        ///TPN4/Vista/
                        $rutaCompleta = __DIR__;
                        //Ruta desde TPN4
                        $posHtdocs = strpos($rutaCompleta, 'TPN4');

                        $htdoc2= $posHtdocs + strlen('htdocs');
                        $htdoc2= strpos($rutaCompleta, 'htdocs')  + strlen('htdocs');

                        
                        //Ruta desde TPN4 hasta Vista
                        $rutaDesdeHtdocs = substr($rutaCompleta, $posHtdocs, 11);
                        $rutaAIndex = substr($rutaCompleta,$posHtdocs, 5);

                        //Ruta desde htdocs hasta tp4
                        // echo $_SERVER["PHP_SELF"]; ///Proyectos/TPN4/vista/BuscarAuto.php
                        $dirActual = $_SERVER["PHP_SELF"];
                        
                        $rutaDesdeTPN4 = strpos($dirActual, 'TPN4');
                        $rutaEntre = substr($dirActual, 0, $rutaDesdeTPN4);
                        
                        //Reemplaza las \ por /
                        $rutaDesdeHtdocs = str_replace('\\', '/', $rutaDesdeHtdocs);

                        $rutaAIndex = "//localhost".$rutaEntre.$rutaAIndex;
                        $rutaDesdeHtdocs = "//localhost".$rutaEntre.$rutaDesdeHtdocs;

                        echo "<li><a class='dropdown-item' href='".$rutaDesdeHtdocs."buscarAuto.php'>Buscar Auto</a></li>";
                        echo "<li><a class='dropdown-item' href='".$rutaDesdeHtdocs."BuscarPersona.php'>Buscar Persona</a></li>";
                        echo "<li><a class='dropdown-item' href='".$rutaDesdeHtdocs."listarPersonas.php'>Listar Personas</a></li>";
                        echo "<li><a class='dropdown-item' href='".$rutaDesdeHtdocs."CambioDuenio.php'>Cambiar Duenio</a></li>";
                        echo "<li><a class='dropdown-item' href='".$rutaDesdeHtdocs."nuevaPersona.php'>Nueva Persona</a></li>";
                        echo "<li><a class='dropdown-item' href='".$rutaDesdeHtdocs."nuevoAuto.php'>Nuevo Auto</a></li>";
                        echo "<li><a class='dropdown-item' href='".$rutaDesdeHtdocs."VerAutos.php'>Ver Autos</a></li>"
                            
                    ?>

                    
                </ul>
            </li>
        </ul>
        
        <?php
        
        ?>

        <?php
        

        echo "<a class='navbar-brand ms-auto' href='".$rutaAIndex."'>Volver al menú principal</a>";
        ?>
        
    </div>
</nav>
