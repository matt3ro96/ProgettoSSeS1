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
$ragSoc1=$_POST['myAzienda'];
$ammImp=$_POST['myAmmImp'];
echo $ragSoc1;
//query per aggiungere l'utente
$sql="SELECT CodAz FROM Azienda where RagioneSociale like '$ragSoc1%'";
//esecuzione query
$result=mysql_query($sql);
//"spacchetto" query
$row = mysql_fetch_assoc($result);
$codAz = $row['CodAz'];
$sql1  ="INSERT INTO ResponsabilitaAmministratoreAzienda (AmministratoreImpianto, Azienda) VALUES('$ammImp','$codAz')";
$result1 = mysql_query($sql1);
$row = mysql_fetch_assoc($result);
header('location:/User/Admin/AssegnaAziende.php?success=1');



?>
