<?php
require_once('config.php');
// Selectare dare din baza de date
$cerereSQL = 'SELECT * FROM `valori_nutritive` WHERE 1';
$rezultat = mysql_query($cerereSQL);
while($rand = mysql_fetch_array($rezultat)) {
echo $rand['Nume aliment']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rand['Grupa alimente']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rand['Proteine']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rand['Grasimi']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rand['Carbohidrati']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rand['Calorii'].' <br>';
}
?>
