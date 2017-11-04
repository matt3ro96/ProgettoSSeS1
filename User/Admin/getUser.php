<?php 
$host="localhost"; // Hostname 
$username="sses"; // Mysql username 
$password="titosorez"; // Mysql password 
$db_name="my_sses"; //Nome del Database 
$tbl_name="sensore"; // Nome della Tabella 
// Procedimento per connettersi al Database 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");  
session_start();
$user= $_SESSION['username'];
$userModify = $_POST['userModify'];
echo $userModify;

$sql = "SELECT Matricola, Nome, Cognome, Password from Utenti where Username = '$userModify'";
$result=mysql_query($sql); 
// Mysql_num_row is counting table row 
$count=mysql_num_rows($result); 

if($count==1){ 

    $username = $row['Matricola'];
    $matricola = $row['Nome'];
    $nome = $row['Cognome'];
    $cognome = $row['Password'];
    

    header('location:/User/Admin/datiModificati.php?success= '$userModify'');

 }else{
    header('location:/User/Admin/ModificaUtente.php?error=1');
    }
?>
