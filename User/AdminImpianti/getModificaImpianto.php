<?php 
	$host="localhost"; // Hostname 
	$username="sses"; // Mysql username 
	$password="titosorez"; // Mysql password 
	$db_name="my_sses"; //Nome del Database 
	// Procedimento per connettersi al Database 
	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");  
	session_start();
	$user= $_SESSION['username'];
	$scelta=$_POST['myScelta'];
	$modifica=$_POST['myModify'];
	$impianto=$_POST['myImpianto'];
    
    echo $modifica;


	if($scelta == 1){
		$sql = "UPDATE Impianto SET Nome = '$modifica' WHERE AmministratoreImpianto='$user' and CodImp='$impianto'";
		$result=mysql_query($sql); 
		

	}else{
		if($scelta == 2){
			$sql = "UPDATE Impianto SET TipoImp = '$modifica' WHERE AmministratoreImpianto='$user' and CodImp='$impianto'";
			$result=mysql_query($sql); 
		}else{
			$sql = "UPDATE Impianto SET DataCreazione = '$modifica' WHERE AmministratoreImpianto='$user' and CodImp='$impianto'";
			$result=mysql_query($sql); 
		}
	}
	header('location:/User/AdminImpianti/modifica_impianto.php?success=1');

?>