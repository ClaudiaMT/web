<?php
require_once('config.php');
//$cerereSQL = 'SELECT * FROM `valori_nutritive` WHERE 1';
$cerereSQL = "SELECT * FROM `valori_nutritive` WHERE `Nume_aliment` REGEXP '".$_POST["cautare_regex"]."' ORDER BY `Nume_aliment` ASC";
//echo $cerereSQL;
$rezultat = mysql_query($cerereSQL);
while($rand = mysql_fetch_array($rezultat)) {
echo "<table border=1 cellspacing=0 cellpading=0 style='font-family:Arial;width:100%'><tr><td style='width:30%'>".$rand['Nume_aliment']."</td><td style='width:30%'>".$rand['Grupa_alimente']."</td><td style='width:10%'>".$rand['Proteine']."</td><td style='width:10%'>".$rand['Grasimi']."</td><td style='width:10%'>".$rand['Carbohidrati']."</td><td style='width:10%'>".$rand['Calorii']."</td></tr></table>";
}
?>