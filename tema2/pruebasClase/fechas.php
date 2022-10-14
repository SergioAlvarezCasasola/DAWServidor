<h1>Fechas</h1>

<?php
     echo time();
     echo "<p>zona</p>";
     echo date_default_timezone_get();
     date_default_timezone_set('Europe/Madrid');
     echo"<br>";
     echo date_default_timezone_get();

     echo "<p>Fecha de hoy</p>";
     echo date ("d M Y", 154789652);
     echo"<br>";
     echo date ("d m Y", 154789652); //Se le puede dar a las fechas un monton de formatos que se pueden ver en la pagina de php
     echo"<br>";
     echo "<p>Fecha de texto a int</p>";
     echo strtotime("now");
     echo"<br>";
     echo strtotime("04-10-2022");

     echo "<br>";
     echo mktime(0,0,0,10,4,2022);

     echo "<p>Diferencia de año, mes dia entre dos fechas</p>";
     $primera = mktime(0,0,0,10,11,1994);
     $segunda = strtotime("04-10-2022");
     $dif = $segunda - $primera;

     echo"Diferencia : " .$dif;
     $anos = $dif / (60*60*24*365);
     echo "<br> Los años que han pasado :" .$anos;

     echo "<p> OTRA FORMA Diferencia de año, mes dia entre dos fechas</p>";
     $fecha1 = new DateTime ("1994-10-11");
     $fecha2 = new DateTime();

     $intervalo = $fecha2->diff($fecha1);
    echo "<br>Años : ".$intervalo->y . " meses : " .$intervalo->m . " dias : " .$intervalo->d;

?>