<html>
<head> <title> Ejercicio 8 </title>
<style>table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>
    <h1> Imprima los valores del vector asociativo siguiente usando la estructura de control foreach: 
        $v[1]=90;
        $v[30]=7;
        $v['e']=99;
        $v['hola']=43;
    </h1>

    <?php
        $v = array('1' => 90, '30' => 7, 'e' => 99, 'hola' => 43);

        foreach ($v as $valor) {
            echo $valor . "<br>";
        }
    ?>

</body>
</html>