<html>
<head> <title> Ejercicio 9 </title>
<style>table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>
    <h1> Hacer un programa que muestre en una tabla de 4 columnas todas las imágenes de el 
    directorio "fotos". Para ello consulte el manual (en concreto la referencia de funciones de 
    directorios). Suponga que en el directorio sólo existen fotos. </h1>

    <?php
        echo "<table style='width:30%'>";
            for ($i = 0; $i < 4; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 4; $j++) {
                    
                }
                echo "</tr>";
            }
        echo "</table>";
    ?>

</body>
</html>