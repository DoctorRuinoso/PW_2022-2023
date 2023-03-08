<html>
<head>
    <title> Ejercicio 2 </title> </head>
<body>
    <h1> Hacer un script PHP que actualice los votos en la Base de datos y muestre los resultados de la votación. </h1>

    <form method='post' action='Ejercicio_2.php'>
        ¿Es esta votación útil?
        <br/>
        <input name='seleccion' type='radio' value='s'/>Sí
        <br/>
        <input name='seleccion' type='radio' value='n'/>No
        <br/>
        <input type='submit' value='enviar'>
    </form>

    <?php
    $conexion = mysqli_connect ("127.0.0.1", "cursophp", NULL, "lindavista");
    $consulta = "SELECT * FROM votos";
    $resultado = mysqli_query ($conexion, $consulta);

    $fila = mysqli_fetch_array ($resultado);
    $votos_si = $fila['votos1'];
    $votos_no = $fila['votos2'];

    if(isset($_POST['seleccion'])) {
        if($_POST['seleccion'] == "s") {
            $votos_si = $votos_si + 1;
        } else {
            $votos_no = $votos_no + 1;
        }
        $consulta = "UPDATE votos SET votos1 = " . $votos_si . ", votos2 = " . $votos_no;
        mysqli_query ($conexion, $consulta);
    }

    print("<TABLE>");
        print("<TR>");
        print("<TH> Respuesta </TH>");
        print("<TH> Votos </TH>");
        print("<TH> Porcentaje </TH>");
        print("<TH> Representación gráfica </TH>");
        print("</TR>");

        $porcentaje1 = $votos_si/($votos_si + $votos_no) * 100;
        $porcentaje2 = $votos_no/($votos_no + $votos_si) * 100;
        $grafica1 = $porcentaje1 . '%';
        $grafica2 = $porcentaje2 . '%';

        print("<TR>");
        print("<TD> Si </TD>");
        print("<TD>" . $votos_si . "</TD>");
        print("<TD>" . $porcentaje1 . "%</TD>");
        print("<TD> <div style='background-color: red; height: 10px; width: " . $grafica1 . ";'></div></TD>");
        print("</TR>");
        
        print("<TR>");
        print("<TD> No </TD>");
        print("<TD>" . $votos_no . "</TD>");
        print("<TD>" . $porcentaje2 . "%</TD>");
        print("<TD> <div style='background-color: red; height: 10px; width: " . $grafica2 . ";'></div></TD>");
        print("</TR>");
    print("</TABLE>");
    ?>

</body>
</html>