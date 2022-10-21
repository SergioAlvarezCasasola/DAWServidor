<h1>Formularios</h1>
<?php

echo "El nombre es. " .$_REQUEST['nombre'];
echo "<br>La contraseña es. " .$_REQUEST['pass'];


echo "<br> El genero es: " .$_REQUEST['genero'];
echo "<br>";

echo "<br> Las asinaturas que has eleido son: ";
if(isset( $_REQUEST["asiganturas"]))
foreach ($_REQUEST["asiganturas"] as $key => $value) {
    # code...
    echo "<br>-". $value;
}
else
    echo"Ninguna";
    echo "<br>";
print_r($_REQUEST);
echo "<br>";
print_r($_FILES);

$ubicacion = "var/www/html/DAWServidor";
$nombreTemporal = basename($_FILES['fichero']['name']);
$ubicacion = $ubicacion.$nombreTemporal;
if(move_uploaded_file($_FILES['fichero']['tmp_name'], $ubicacion)){
    echo "<br> El fichero se ha subido";
}else{
    echo "<br> Ha fallado";
}
