<?php
    require("./validar.php");
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../../webRoot/css/estilos.css">

        <title>PR09</title>
</head>
<body>
    <h1>Formulario y expresiones regulares</h1>
    <form action="./PR09.php" method="post" enctype="multipart/form-data">

    <!-- NOMBRE -->
        <p>
            <label for="idNombre">Nombre</label>
            <input type="text" name="nombre" id="idNombre" 
            value="<?php
                if (enviado() && !vacio("nombre")) {
                    echo $_REQUEST["nombre"];
                }
            ?>">
            <?php
                // Comprobar que no este vacío, si lo está pongo un error
                if (vacio("nombre") && enviado()) {
                    ?>
                        <span style=color:red><-- Debe introducir un nombre!!</span>
                    <?
                }
            ?>
        </p>
        <!-- APELLIDOS -->
        <p>
            <label for="idApellido">Apellidos</label>
            <input type="text" name="apellidos" id="idApellido">
        </p>
        <!-- FECHA -->
        <p>
        <label for="idFecha">Elija un fecha</label>
        <input type="date" name="fecha"  />
        </p>
        <!-- DNI -->
        <p>
            <label for="idDNI">DNI</label>
            <input type="text" name="apellidos" id="idDNI">
        </p>
        <!-- CORREO ELCTRONICO -->
        <p>
            <label for="idDNI">Correo electrónico</label>
            <input type="email" id="email">
        </p>
        <br>
        <input type="submit" value="Enviar" name="enviar" style=width:170px>
    </form>
</body>
</html>