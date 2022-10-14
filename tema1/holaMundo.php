<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>holmundo</title>
</head>
<body>
    <h1>Pruebas en php con html</h1>
    <?
    echo "<p>Hola Mundo</p>";
    print ("<p>Hola Clase</p>");
    ?>

    <p><? echo "Hello Word"?></p>

    <h1>Tipos de datos</h1>
    <? var_dump("sergio");
       var_dump (3);;
       var_dump(3.17);    
    ?>

    <h1>Tipo de variable</h1>
        <?
           $mivariable = 3;
           var_dump($mivariable);
           $mivariable = "sergio";
           var_dump($mivariable);
           $mifloat =3.17;
           echo "<br>";
           var_dump($mifloat);
           $nuevoint = (int)$mifloat;
           var_dump($nuevoint);
           $booleano = true;
           var_dump($booleano);
           echo "<br>";
           $vacia = null;
           $esnula = is_null($vacia);
           var_dump($esnula);
        ?>
    
    <h1>GET</h1>
        <?
            var_dump($_GET);
        ?>

    <h1>Tipo de dato</h1>
        <?
            echo "mi variable es de tipo " .gettype($mivariable);
            echo "<br>";
            echo "la variable de la url hijos es  ".$_GET['hijos']. is_numeric($_GET['hijos']);
        ?>

    <h1>Variable de Variable</h1>
        <?
            $viernes="fiestas";
            $$viernes="copas";
            echo $viernes;
            echo "<br>";
            echo $$viernes;
            echo "<br>";
            echo $fiestas;
        ?>
    <h1>Valor y Referencia</h1>
        <?
            $var=1;
            $var1 = $var;
            echo $var ."<br>";
            echo $var ."<br>";
            $var1 = $var1 + 1;
            echo $var ."<br>";
            echo $var1 ."<br>";

            $var=1;
            $var1 = &$var;
            echo $var ."<br>";
            echo $var ."<br>";
            $var1 = $var1 + 1;
            echo $var ."<br>";
            echo $var1 ."<br>";

        ?>
    <h1>Ambito de las variables</h1>
        <?
            $global = 1;

            function cambio (){
                $global = 2;
                echo "El valor de global dentro de la funcion es " .$global ."<br>";
            }
            cambio ();
            echo "El valor de global es " .$global;

            //Crear variables de funcion
            function crearCoches(){
                static $numeroVecesCreada =0;
                $numeroVecesCreada = $numeroVecesCreada + 1;
                echo "<br> Ha sido creado un coche";
                echo "<br> Llevo creado " .$numeroVecesCreada ;
            }
            crearCoches();
            crearCoches();

        ?>

<a href="../verFichero.php?fichero=./Tema1/holaMundo.php">Ver fichero</a>
</body>
</html>