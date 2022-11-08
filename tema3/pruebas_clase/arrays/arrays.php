<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <h1>Arrays</h1>
    <?php
    // Arrays numericos
    $meses = array();
    echo var_dump($meses);

    $meses = array("Enero","Febrero", "Marzo");
    echo "<pre>";
    var_dump($meses);
    echo "</pre>";
    // Arrays con longfitud
    $diaSemana = array(7);
    echo "<pre>";
    var_dump($diaSemana);
    echo "</pre>";
    // sintaxis corta 
    $notas = [2.3,5.3];
    echo "<pre>";
    var_dump($notas);
    echo "</pre>";
    // Acceder o modificar
    echo $meses [2];
    // Contar el numero de elmentos de un array
    echo "<br>";
    echo count($meses);

    for ($i=0; $i < count($meses); $i++) { 
        # code...
        echo "<br>";
        echo $meses [$i];
    }
    // Asignar nuevos valores al array

    $meses[3]="Abril";
    for ($i=0; $i < count($meses); $i++) { 
        # code...
        echo "<br>";
        echo $meses [$i];
    }
    // quitar el ultimo
    echo "<br>";
    array_pop($meses);
    foreach ($meses as $key){
        echo $key;
    }
    //quitar un elemento
    unset($meses[0]);
    echo "<br>";
    echo "<pre>";
    var_dump($meses);
    echo "</pre>";
    print_r($meses);
    // arrays asociativos
    
    $notas = array("Cristian"=>7, "Lucia"=>7, "Itziar"=>10, "Manu"=>10, "Javi"=>9.5);
    print_r($notas);

    echo "<br>Nota :". $notas["Lucia"];
    foreach ($notas as $key => $value) {
        # code...
        echo "<br>La nota de una persona ". $key. " es : ".$value;
    }
    // arrays multidimensionales

    $multi = array(array(),array(),);
    echo var_dump($multi);

    $asignaturas = array(
        "DAM" => array("PRO" => "Programacon", "LM" => "Lenguaje marcas"),
        "DAW" => array("DWES" => "Servidor", "DWEC" => "Cliente")
    );

    // recorrer arrays anidados
    foreach ($asignaturas as $key => $value){
        echo "<br>EL curso de ". $key. " cursa las siguientes asiganatures : ";
        foreach ($value as $siglas => $nombre) {
            echo "<br>" .$siglas. ":" .$nombre;
        }
    }
    echo "<h1>Funciones</h1>";
    //Current
    echo "Current ". current($notas);
    echo "<br>";
    echo "Ultimo ". end($notas);
    reset($notas);
    echo "<br>";
    echo "Current ". current($notas);
    echo "<br>";
    echo "Clave " . key($notas);

    

    ?>

</body>
</html>