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
$impianto=$_POST['myImp'];
$cliente=$_POST['myCliente'];
echo $ragSoc1;
//query per aggiungere l'utente
$sql="SELECT AziendaAssociata FROM Impianto where CodImp = '$impianto'";
//esecuzione query
$result=mysql_query($sql);
//"spacchetto" query
$row = mysql_fetch_assoc($result);
$aziendaImp = $row['AziendaAssociata'];

$sql2="SELECT AziendaAssociata FROM Utenti where Username = '$cliente'";
//esecuzione query
$result2=mysql_query($sql2);
//"spacchetto" query
$row = mysql_fetch_assoc($result2);
$aziendaCliente = $row['AziendaAssociata'];

if($aziendaCliente == $aziendaImp){
	$sql1  ="INSERT INTO AutorizzazioneClienti (cliente, Impianto) VALUES('$cliente','$impianto')";
	$result1 = mysql_query($sql1);
	$row = mysql_fetch_assoc($result);
	header('location:/User/AdminImpianti/gestione_permessi_impianti.php');
}else{
	header('location:/User/AdminImpianti/gestione_permessi_impianti.php?error=1');
}




?>