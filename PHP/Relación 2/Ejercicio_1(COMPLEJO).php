<html>
<head> <title> Ejercicio 1 </title> </head>
<body>
    <h1> Lanzar una consulta select desde un script PHP que muestre en una tabla todas las noticias. </h1>

    <?php
        function connect($host,$usuario,$contraseña) {
            if (func_num_args() == 0) {
                $conexion = @mysqli_connect();
            } else {
                $conexion = @mysqli_connect($host,$usuario,$contraseña);

            }

            if ($conexion) {
                echo 'Conexión con éxito.<br/>';
            $ok = mysqli_select_db($conexion, 'lindavista');
            if ($ok) {
                echo 'Base de datos seleccionada.<br/>';
            } else {
                echo 'No se pudo seleccionar la base de datos.';
            }
                /*echo 'Información sobre el servidor:';
                    mysqli_get_host_info($conexion);'<br/>';
                echo 'Versión del servidor:';
                    mysqli_get_server_info($conexion);'<br/>';*/
            } else {
                printf('Error %d: %s.<br/>',mysqli_connect_errno(),mysqli_connect_error());
            }
            return $conexion;
        }

        function disconnect($conexion) {
            if ($conexion) {
                $ok = @mysqli_close($conexion);
                if ($ok) {
                    echo 'Desconexión con éxito.<br/>';
                } else {
                    echo 'Error al desconectar.<br/>';
                }
            } else {
                echo 'Conexión no abierta.<br/>';
            }
        }

        $host = NULL;
        $usuario = 'cursophp';
        $contraseña = NULL;

        $conexion = connect($host,$usuario,$contraseña);

        $consulta = "SELECT * FROM noticias";
        $resultado = mysqli_query($conexion,$consulta);
        
        $nfilas = mysqli_num_rows ($resultado);
        if ($nfilas > 0) {
            print("<TABLE>");
            for ($i=0; $i<$nfilas; $i++) {
                $fila = mysqli_fetch_array ($resultado);
            }
        }

        disconnect($conexion);
    ?>

</body>
</html>