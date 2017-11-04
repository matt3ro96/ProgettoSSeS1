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
$CodAz=$_POST['CodAz'];
echo $CodAz;

//query per prendere i nomi delle aziende presenti nel database
//query per prendere i nomi
$sql="DELETE FROM Azienda WHERE Azienda.CodAz='$CodAz'";
//esecuzione query
$result=mysql_query($sql);
header('location:/User/Admin/RimuoviAzienda.php?delete=1');
?>
