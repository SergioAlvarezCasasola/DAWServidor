
    <h1>Funciones</h1>
    <?php
    // Sin parametro
    function saludo (){
        echo "Hola";
    }
    // Con parametro
    function saludo2($nombre){
        echo "Hola " .$nombre;
    }

    // Parametros tipos de valores normales
    //pasan por valor
    //con un parametro
    function saludo3($nombre){
        $nombre = $nombre . "valor;";
        echo "Hola " .$nombre;
    }

    // Cambiar una funcion global
    function saludo4(){
        global $nombre;
        $nombre = $nombre . "valor;";
        echo "Hola " .$nombre;
    }

    // valor por defecto
    function saludo7($nombre = "Mundo"){
        echo "Hola " .$nombre;
    }
    //Valor por array
    function rellenaArray($array){
        array_push($array, strtotime(time()));
        print_r($array);
    }
    //Objetos
    function cambioLado ($objeto, $lado){
        $objeto->lado = $lado;
    }

    ?>
</body>
</html>