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
$ragSoc1=$_POST['ragSoc1'];
$pIva1=$_POST['pIva1'];
//query per aggiungere l'utente
$sql="INSERT INTO Azienda (RagioneSociale, PartitaIva) VALUES('$ragSoc1','$pIva1')";
//esecuzione query
$result=mysql_query($sql);
//"spacchetto" query
$row = mysql_fetch_assoc($result);


header('location:/User/Admin/AggiungiAzienda.php?success=1');

?>
