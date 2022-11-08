<h1>Funcion</h1>
<?
    include("./funciones.php");

    saludo();
    echo "<br>";
    saludo2("Sergio");
    echo "<br>";
    $nombre="Sergio";

    //No se cambia porque se ha pasado por valor
    saludo3($nombre);
    echo "<br>Cambio de nombre " .$nombre;

    //De forma global
    echo "<br>";
    echo "USANDO GLOBAL";
    echo "<br>";
    saludo4();
    echo "<br>Cambio de nombre " .$nombre;
    echo "<br>";

    //valor por defecto
    echo "<br>";
    echo "Valores por decfecto";
    echo "<br>";
    saludo7();

    //Pasasr un aray
    $array = array();
    //Llamar funcion que la rellene con la hora que se ha hehco la llamada
    //Los arrays se pasan por valor
    rellenaArray($array);
    rellenaArray($array);
    rellenaArray($array);
    print_r($array);

    //Objetos
    class Cuadrado{
        public $lado = 5;
    }

    $objeto = new Cuadrado();
    cambioLado($objeto, 6);
    echo "<br> Objeto: ". $objeto->lado;
