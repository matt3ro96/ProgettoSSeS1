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
$username=$_SESSION['username'];

//query per prendere i nomi delle aziende presenti nel database
//query per prendere i nomi
$sql="SELECT Username FROM Utenti where Ruolo = 'G'";
//esecuzione query
$result=mysql_query($sql);
//"spacchetto" query
while($row = mysql_fetch_assoc($result)){
	$user=$row['Username'];
    echo "<option name=".$user." value=".$user.">".$user."</option>";
}


?>
