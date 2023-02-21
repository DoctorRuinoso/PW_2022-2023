<html>
<head> <title> Ejercicio 7 </title>
<style>table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>
    <h1> Almacene en un vector los 10 primeros números pares. Imprímalos cada uno en una línea. </h1>

    <?php
        define('TAM', 10);
        $vector = array(0, 2, 4, 6, 8, 10, 12, 14, 16, 18);

        for ($i = 0; $i < TAM; $i++) {
            echo $vector[$i] . "<br>";
        }
    ?>

</body>
</html>