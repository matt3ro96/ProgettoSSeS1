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
$username=$_POST['myUser'];
$azienda=$_POST['myAzienda'];
echo $azienda;
//query per prelevare il codice dell'azienda dal nome
$sql="SELECT CodAz FROM Azienda WHERE RagioneSociale like'%$azienda%'";
//esecuzione query
$result=mysql_query($sql);
//spacchetto la query
$row = mysql_fetch_assoc($result);
$codAz=$row['CodAz'];
echo $codAz;
//query per eliminare l'associazione
$sql1="DELETE FROM ResponsabilitaAmministratoreAzienda WHERE AmministratoreImpianto='$username' AND Azienda='$codAz'";
$result1=mysql_query($sql1);
$row1=mysql_fetch_assoc($result1);
header('location:/User/Admin/AssegnaAziende.php');
?>