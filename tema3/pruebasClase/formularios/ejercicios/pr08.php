
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio PR08</title>
</head>
<body>

    <h1>Formulario de registro</h1>
    <form action="./recibepr08.php" method="post" enctype="multipart/form-data">
    <p>
        <label for="alfabetico">Alfabetico</label>
        <input type="text" nombre="alfabetico" id="idAlfabetico" value="">
        
        
    </p>
    <p>
        <label for="opAlfabetico">Alfabetico Opcional</label>
        <input type="text" nombre="opAlfabetico" id="idOpAlfabetico" value="">
    </p>
    <p>
        <label for="alfanumerico">Alfanumerico</label>
        <input type="number" nombre="alfanumerico" id="idAlfanumerico" value="">
    </p>
    <p>
        <label for="opAlfanumerico">Alfanumerico Opcional</label>
        <input type="number" nombre="opAlfanumerico" id="idOpAlfanumerico" value="">
    </p>
    <p>
        <label for="fecha">Fecha</label>
        <input type="date" nombre="fecha" id="idFecha" value="">
    </p>
    <p>
        <label for="opFecha">Fecha opcional</label>
        <input type="date" nombre="opFecha" id="idOpFecha" value="">
    </p>
    <p><b>Radio Obligatorio</b>
        <label for="uno">Opcion1</label>
        <input type="radio" nombre="uno" id="idUno" value="">
        <label for="dos">Opcion2</label>
        <input type="radio" nombre="dos" id="idDos" value="">
        <label for="tres">Opcion3</label>
        <input type="radio" nombre="tres" id="idTres" value="">
    </p>
    <p><b>Elige una opcion:</b>
            <select name="select">
                <option value="value1">Opcion1</option>
                <option value="value2" >Opcion2</option>
                <option value="value3">Opcion3</option>
            </select>
    </p>
    <p><b>Elige al menos 1 y maximo 3:</b><br>
        <label for="vehicle1">Checked1</label>    
        <input type="checkbox" id="Checked1" name="Checked1" value="">
        <label for="vehicle2">Checked2</label>
        <input type="checkbox" id="Checked2" name="Checked2" value="">
        <label for="vehicle3">Checked3</label>       
        <input type="checkbox" id="Checked3" name="Checked3" value="">
        <label for="vehicle1">Checked4</label>
        <input type="checkbox" id="Checked4" name="Checked4" value="">
        <label for="vehicle2">Checked5</label>
        <input type="checkbox" id="Checked5" name="Checked5" value="">
        <label for="vehicle3">Checked6</label>
        <input type="checkbox" id="Checked6" name="Checked6" value="">
        
        
    </p>
    <p>
        <label for="alfabetico">Nº de telefono</label>
        <input type="tel" nombre="telefono" id="idTelelfono" value="">
    </p>
    <p>
        <label for="emial">Email</label>
        <input type="email" name="emial" id="idEmail" value="">
    </p>
    <p>
        <label for="idPass">Contraseña</label>
        <input type="password" name="pass" id="idPass"value="">
    </p><b>Subir documento</b>
        <input type="file" name="fichero" id="idFichero"><br>

        <input type="submit" value="Enviar" name="enviar" >

    </form>
    
</body>
</html>