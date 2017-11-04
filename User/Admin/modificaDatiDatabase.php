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
	$datoDaModificare = $_POST['scelta'];
	$datoModificato = $_POST['datoModificato'];


	if($datoDaModificare == 1){
		$sql = "UPDATE Utenti SET Nome = '$datoModificato' WHERE Utenti.Username = '$userModify' ";
		$result=mysql_query($sql); 
		$sqlProva = "SELECT * from Utenti where Utenti.Username = '$userModify'";

	}else{
		if($datoModificato == 2){
			$sql = "UPDATE Utenti SET Cognome = '$datoModificato' WHERE Utenti.Username = '$userModify' ";
			$result=mysql_query($sql); 
		}else{
			$sql = "UPDATE Utenti SET Password = '$datoModificato' WHERE Utenti.Username = '$userModify' ";
			$result=mysql_query($sql); 
		}
	}
	header('location:/User/Admin/ModificaUtente.php?success=1');

?>
