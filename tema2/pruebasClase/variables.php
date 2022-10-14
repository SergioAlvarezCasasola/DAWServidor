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

            include("./constantes.php");
            echo "<br>Al usuario ".USER. " le gusta el numero " .PI;


            echo "<pre>";
            var_dump($_SERVER);
            var_dump($_GET);
            var_dump($_POST);
            var_dump($_REQUEST);
            var_dump($_COOKIE);
            var_dump(getenv());
            var_dump($_FILES);
            session_start();
            var_dump($_SESSION);
            echo "</pre>";
            
    
        ?>