<?php 
	$host="localhost"; // Hostname 
	$username="sses"; // Mysql username 
	$password="titosorez"; // Mysql password 
	$db_name="my_sses"; //Nome del Database 
	// Procedimento per connettersi al Database 
	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");  
	session_start();
	$scelta=$_POST['myScelta'];
	$modifica=$_POST['myModify'];
	$app=$_POST['myApp'];


	if($scelta == 1){
		$sql = "UPDATE ApplicazioniTerzeParti SET Nome='$modifica' WHERE Codice='$app'";
		$result=mysql_query($sql); 
	}else{
		$sql = "UPDATE ApplicazioniTerzeParti SET IP='$modifica' WHERE Codice='$app'";
		$result=mysql_query($sql); 
	}
	header('location:/User/AdminImpianti/modifica_applicazione.php?success=1');

?>