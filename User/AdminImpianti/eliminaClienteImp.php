<?php 
$host="localhost"; // Hostname 
$username="sses"; // Mysql username 
$password="titosorez"; // Mysql password 
$db_name="my_sses"; //Nome del Database 
// Procedimento per connettersi al Database 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");  
// Nome utente e password inviate attraverso il form 
session_start();
$username=$_POST['myCliente'];
$impianto=$_POST['myImp'];
//query per eliminare l'associazione
$sql1="DELETE FROM AutorizzazioneClienti WHERE cliente='$username' AND Impianto ='$impianto'";
$result1=mysql_query($sql1);
$row1=mysql_fetch_assoc($result1);
header('location:/User/AdminImpianti/gestione_permessi_impianti.php?success=1');
?>
