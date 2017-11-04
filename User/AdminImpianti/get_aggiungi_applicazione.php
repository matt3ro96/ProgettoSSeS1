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
$indIP=$_POST['myIP'];
$nomeApp=$_POST['myNomeApp'];
$azienda=$_POST['myAzienda'];
$tbl_name="Utenti"; // Nome della Tabella 
$user= $_SESSION['username']; 

//query per inserire i dati della nuova app nella tabella appTerzePart da noi inseriti
$sql1= "INSERT INTO ApplicazioniTerzeParti(IP, Nome, AziendaAssociata) VALUES('$indIP','$nomeApp','$azienda')";
$result=mysql_query($sql1);
header('location:/User/AdminImpianti/aggiungi_applicazione.php?success=1');

?>