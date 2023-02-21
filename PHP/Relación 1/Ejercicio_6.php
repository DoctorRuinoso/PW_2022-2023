<html>
<head> <title> Ejercicio 6 </title>
<style>table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>
    <h1> Mostrar una tabla de 4 por 4 que muestre las primeras 4 potencias de los números del 1 al 4 
    (hacer una función que las calcule invocando la función pow). En PHP las funciones hay que 
    definirlas antes de invocarlas. Los parámetros se indican con su nombre ($cantidad) si son 
    por valor y antecedidos de & (&$cantidad) si son por referencia. </h1>

    <?php
        define('TAM', 4);

        function potencia($base, $exponente) {
            return pow($base, $exponente);
        }

        echo "<table style='width:30%'>";
            for ($i = 1; $i <= TAM; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= TAM; $j++) {
                    echo "<td>" . potencia($i, $j) . "</td>";
                }
                echo "</tr>";
            }
        echo "</table>";
    ?>

</body>
</html>