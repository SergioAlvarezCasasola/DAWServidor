<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>holaMundoIdiomas</title>
</head>
<body>
    <? 
        $es="Hola Mundo";
        $en="Hello Word";
        $it="Ciao mondo";
        $fr="salut monde";
        $ger="Hallo Welt";
        $idioma =$_GET['pais'];
        echo "${$idioma}";
    ?>
</body>
</html>