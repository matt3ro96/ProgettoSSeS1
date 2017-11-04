<?php 
$host="localhost"; // Hostname 
$username="sses"; // Mysql username 
$password="titosorez"; // Mysql password 
$db_name="my_sses"; //Nome del Database 
// Procedimento per connettersi al Database 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");  
// Nome utente e password inviate attraverso il form 

$codiceSensore=$_POST['myCodice'];
$tipo=$_POST['myTipo'];
$marca=$_POST['myMarca'];
$impianto=$_POST['myImpianto'];
$azienda=$_POST['myAzienda'];
session_start();

//query per inserire i dati della nuova app nella tabella appTerzePart da noi inseriti
$sql1= "INSERT INTO Sensori(CodSen, Tipo, Marca, Impianto, AziendaAssociata) VALUES('$codiceSensore','$tipo','$marca','$impianto','$azienda')";

$result=mysql_query($sql1);

header('location:/User/AdminImpianti/aggiungiSensori.php?success=1');

?>