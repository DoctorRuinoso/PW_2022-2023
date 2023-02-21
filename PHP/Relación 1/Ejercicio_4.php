<html>
<head> <title> Ejercicio 4 </title>
<style>table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>
    <h1> Mostrar en pantalla una tabla de 10 por 10 con los números del 1 al 100 </h1>

    <?php
        echo "<table style='width:30%'>";
            for ($i = 0; $i < 10; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 10; $j++) {
                    echo "<td>" . $i*10 + $j . "</td>";
                }
                echo "</tr>";
            }
        echo "</table>";
    ?>

</body>
</html>