<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="./recibe.php" method="post">
        <p>
            <label for="idNombre">Nombre</label>
            <input type="text" name="nombre" id="idNombre">
        </p>
        <p>
            <label for="idPass">Contraseña</label>
            <input type="password" name="pass" id="idPass">
        </p>
        <p><b>Genero</b>
            <label for="">Masculino</label>
            <input type="radio" name="genero" id="idMasculino" value="masculino">
            <label for="">Femenino</label>
            <input type="radio" name="genero" id="idMasculino" value="femenino">
        </p>
        <p><b>Asignaturas</b>
            <label for="isDWES">Desarrollo entorno servidor</label>
            <input type="checkbox" name="asignaturas[]" id="isDWES" value="DWES">
            <label for="isDWEC">Desarrollo entorno cliente</label>
            <input type="checkbox" name="asignaturas[]" id="isDWEC" value="DWEC">
        </p>
<input type="file" name="" id="">

        <input type="submit" value="Enviar">

    </form>
</body>
</html>