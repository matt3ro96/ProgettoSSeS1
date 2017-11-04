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
$nome=$_POST['myNome'];
$tipo=$_POST['myTipo'];
$data=$_POST['myData'];
$azienda=$_POST['myAzienda'];
echo $nome;
$tbl_name="Utenti"; // Nome della Tabella 
$user= $_SESSION['username']; 

//query per prendere l'id della tabella associata al gestore che inserisce la nuova applicazione
//query per prendere l'id
$sql="SELECT Username FROM $tbl_name WHERE Username= '$user' ";
//esecuzione query
$result=mysql_query($sql);
//"spacchetto" query
$row = mysql_fetch_assoc($result);
//assegno risultato cercato (username inseritore) a una mia variabile
$usql=$row['Username'];
//query per inserire i dati della nuova app nella tabella appTerzePart da noi inseriti
$sql1= "INSERT INTO Impianto(Nome, TipoImp, DataCreazione, AziendaAssociata, AmministratoreImpianto) VALUES('$nome','$tipo','$data','$azienda','$usql')";

$result=mysql_query($sql1);

header('location:/User/AdminImpianti/aggiungi_impianto.php?success=1');

?>