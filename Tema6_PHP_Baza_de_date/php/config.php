<?php
// Informatii baza de date
$AdresaBazaDate = "localhost";
$UtilizatorBazaDate = "root";
$ParolaBazaDate = "";
$NumeBazaDate = "alimente";
$conexiune = mysql_connect($AdresaBazaDate,$UtilizatorBazaDate,$ParolaBazaDate)
or die("Nu ma pot conecta la MySQL!");
mysql_select_db($NumeBazaDate,$conexiune)
or die("Nu gasesc baza de date \"" . $NumeBazaDate . "\"!");
//echo "Conexiune reusita la MySQL \"". $AdresaBazaDate . "\", baza de date \"" . $NumeBazaDate . "\"."."<br>"."<br>";
?>
