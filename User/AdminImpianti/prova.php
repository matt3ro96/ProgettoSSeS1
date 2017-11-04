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
//query per prendere l'id della tabella associata al gestore che inserisce la nuova applicazione
//query per prendere l'id
$sql="SELECT AziendaAssociata FROM Utenti WHERE Username= 'gestore' ";

$query = mysql_query($sql);
$result = mysql_fetch_array($query);
if ($result['column'] === NULL){

    echo "yeah";
}


?>