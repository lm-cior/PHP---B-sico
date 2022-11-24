<?php
    if(isset($_REQUEST["enviar"])) {

        $nombre      = strip_tags(trim($_REQUEST["nombre"]));
        $tlf         = strip_tags(trim($_REQUEST["tlf"]));
        $matriculado = strip_tags(trim($_REQUEST["matriculado"]));
        $enseñanza   = strip_tags(trim($_REQUEST["enseñanza"]));
        $mostrar     = strip_tags(trim($_REQUEST["select"]));

        $datos = "El alumno <b>$nombre</b>, con telefono <b>$tlf</b>, <b>";

        if($matriculado) {

            $datos .= "está matriculado ";

        } else {

            $datos .= "no está matriculado ";

        }

        $datos .= "</b>en <b>$enseñanza</b>. ";

        if($mostrar == "pantalla") {

            echo $datos;

        } else if($mostrar == "archivo") {

            $file = fopen("datos.txt", "w");
                fwrite($file, $datos);
            fclose($file);

            echo "<a href='./Mostrar_Datos.php'>Mostrar datos</a>";
            
        }
    }
?>