<?php

    if (isset($_REQUEST['GUARDAR'])){
        
        $Nombre    = $_REQUEST['Nombre'];
        $Trabajo   = $_REQUEST['Trabajo'];
        $Telefono  = $_REQUEST['Telefono'];
        $Direccion = $_REQUEST['Direccion'];
        $Otros     = $_REQUEST['Otros'];

        $nombre_archivo = "contactos.txt";

        $fd = fopen($nombre_archivo, "a");

            $datos = "$Nombre, $Trabajo, $Telefono, $Direccion, $Otros";

            fwrite($fd, $datos . PHP_EOL);

        fclose($fd);

        echo "Se ha añadido correctamente al fichero";

        $fr = fopen($nombre_archivo, "r");

            echo "<h4>Tus contactos:<br><br></h4>\n";
            while(!feof($fr)){
                $lectura = fgets($fr);
                echo $lectura. "<br>\n";
            }
            
        fclose($fr);

        echo "";
        
    }
?>