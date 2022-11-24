<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Ejercicio 3</title>

        <style>
            
        </style>

    </head>
        <body>
            <form action="Datos_a_Mostrar.php" method="post">

                <fieldset>
                    <h2>Datos del Alumno</h2>
                    
                    <label for="nombre">Introduzca su nombre:</label>
                    <input type="text" name="nombre" id="nomnbre">
                    <br><br>
                    
                    <label for="telefono">Introduzca su teléfono:</label>
                    <input type="number" name="tlf" id="tlf">
                    <br><br>

                    <label for="matriculado">Matriculado</label>
                    <input type="checkbox" name="matriculado" id="matriculado" value="matriculado">
                    <br><br>

                    <label for="enseñanza">Enseñanza</label>
                    <br><br>

                    <input type="radio" name="enseñanza" id="secundaria" value="secundaria">
                    <label for="secundaria">Secundaria</label>
                    <input type="radio" name="enseñanza" id="bachillerato" value="bachillerato">
                    <label for="bachillerato">Bachillerato</label>
                    <br><br>

                    <input type="radio" name="enseñanza" id="grado-medio" value="grado medio">
                    <label for="grado-medio">Grado Medio</label>
                    <input type="radio" name="enseñanza" id="grado-superior" value="grado superior">
                    <label for="grado-superior">Grado Superior</label>
                    <br><br>

                    <label for="mostrar">Mostrar datos: </label>
                    <select name="select" id="select">
                        <option value="pantalla">Por pantalla</option>
                        <option value="archivo">En el archivo datos.txt</option>
                    </select>

                </fieldset>    
                <br>

                <input type="submit" value="Enviar datos" name="enviar">

            </form>

        </body>
</html>