<html>
<head> <style>
    table,
    th,
    td {
        border: 1px solid black;
    }
    </style>
    <title> Ejercicio 1 </title> </head>
<body>
    <h1> Lanzar una consulta select desde un script PHP que muestre en una tabla todas las noticias. </h1>

    <?php
        $conexion = mysqli_connect ("127.0.0.1", "cursophp", NULL, "lindavista");
        $consulta = "SELECT * FROM noticias";
        $resultado = mysqli_query ($conexion, $consulta);

        $nfilas = mysqli_num_rows ($resultado);
        if ($nfilas > 0) {
            print("<TABLE>");
            print("<TR>");
            print("<TH> Titulo </TH>");
            print("<TH> Texto </TH>");
            print("<TH> Categoría </TH>");
            print("<TH> Fecha </TH>");
            print("<TH> Imagen </TH>");
            print("</TR>");
            for ($i=0; $i<$nfilas; $i++) {
                $fila = mysqli_fetch_array ($resultado);
                print("<TR>");
                print("<TD>" . $fila['titulo'] . "</TD>");
                print("<TD>" . $fila['texto'] . "</TD>");
                print("<TD>" . $fila['categoria'] . "</TD>");
                print("<TD>" . $fila['fecha'] . "</TD>");
                print("<TD>" . $fila['imagen'] . "</TD>");
                print("</TR>");
            }
            print("</TABLE>");
        }

    ?>

</body>
</html>