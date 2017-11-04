<?php 
$host="localhost"; // Hostname 
$username="sses"; // Mysql username 
$password="titosorez"; // Mysql password 
$db_name="my_sses"; //Nome del Database 
$tbl_name="Utenti"; // Nome della Tabella 
// Procedimento per connettersi al Database 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");  
// Nome utente e password inviate attraverso il form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 
$sql="SELECT * FROM $tbl_name WHERE Username='$myusername' and Password='$mypassword'"; 

$result=mysql_query($sql); 
// Mysql_num_row is counting table row 
$count=mysql_num_rows($result); 
// If result matched $myusername and $mypassword, table row must be 1 row 

if($count==1){ 
//crea un id sessione per ogni utente loggato
 session_start();
 $_SESSION['username'] = $myusername;
 $_SESSION['password'] = $mypassword;

 
// Register $myusername, $mypassword and redirect to file "login_success.php" 
while ($row = mysql_fetch_assoc($result)) {
		$ruolo = $row['Ruolo'];
        $_SESSION['Ruolo'] = $ruolo;
}



 
      if($ruolo=="A"){
          // Controlla se la sessione è stata registrata, altrimenti rimanda alla pagina di login 
          // Questa prima parte dobbiamo inserirla in tutte le pagine che vogliamo proteggere con password prima di qualsiasi altra cosa 

          header('location: Admin\info.php');

      }else if($ruolo=="G"){
      
      header('location:info.php'); 
      
      }else if($ruolo=="U" ){

      header('location:Utente/index_utente.php'); 

      }else{ 
          header('location:..\index.php?error=1');
      }
 }else{ 
        header('location:..\index.php?error=1');
 }
?>