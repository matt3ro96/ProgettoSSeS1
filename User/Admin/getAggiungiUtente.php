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
$username1=$_POST['username1'];
$password1=$_POST['password1'];
$number=$_POST['number'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$mansion=$_POST['mansion']; 
$company=$_POST['company'];
//query per aggiungere l'utente
$sql="INSERT INTO Utenti (Username, Password, Matricola, Nome, Cognome, Ruolo, AziendaAssociata) VALUES('$username1','$password1','$number','$name','$surname','$mansion','$company')";
//esecuzione query
$result=mysql_query($sql);
//"spacchetto" query
$row = mysql_fetch_assoc($result);

$result=mysql_query($sql);

header('location:/User/Admin/AggiungiUtente.php?success=1');

?>