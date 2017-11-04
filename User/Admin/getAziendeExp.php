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
$tbl_name="Azienda"; // Nome della Tabella 

//query per prendere i nomi delle aziende presenti nel database
//query per prendere i nomi
$sql="SELECT RagioneSociale, CodAz FROM $tbl_name";
//esecuzione query
$result=mysql_query($sql);
//"spacchetto" query
while($row = mysql_fetch_assoc($result)){
	$nomeAz=$row['RagioneSociale'];
    $codaz=$row['CodAz'];
    echo "<option name=".$codaz." value=".$codaz.">".$nomeAz."</option>";
}


?>