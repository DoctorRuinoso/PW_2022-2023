<html>
<head> <title> Ejercicio 5 </title>
<style>table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>
    <h1> Ídem al anterior, pero colorear las filas alternando gris y blanco. Además, el tamaño será una constante: define(TAM, 10) </h1>

    <?php
        define('TAM', 10);

        echo "<table style='width:30%'>";
            for ($i = 0; $i < TAM; $i++) {
                if($i%2 == 0) {
                    echo "<tr style='background-color:grey'>";
                }else {
                    echo "<tr>";
                }
                for ($j = 1; $j <= TAM; $j++) {
                    echo "<td>" . $i*10 + $j . "</td>";
                }
                echo "</tr>";
            }
        echo "</table>";
    ?>

</body>
</html>