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
session_start();
$user= $_SESSION['username']; 

$sql="SELECT * FROM $tbl_name WHERE Username= '$user' "; 
$result=mysql_query($sql); 
// Mysql_num_row is counting table row 
$count=mysql_num_rows($result); 
// If result matched $myusername and $mypassword, table row must be 1 row 

if($count==1){ 

  while ($row = mysql_fetch_assoc($result)) {//inizio while

          $username=$row['Username'];
          $matricola=$row['Matricola'];
          $nome=$row['Nome'];
          $cognome=$row['Cognome'];
          $ruolo = $row['Ruolo'];
  }//end while
  
  		

  
		if($ruolo=="U"){
			$ruolo= "Utente";
		}else if( $ruolo=="G"){
			$ruolo="Amministratore Impianti";
		}else if($ruolo=="A"){
			$ruolo="Amministratore Utenti";
		}else{
			$ruolo="Errore.";
		}
  
		echo "<thead>";
                                           
		echo "<tr><th>Matricola</th><td>".$matricola."</td></tr>";
		echo "<tr><th>Username</th><td>".$username."</td></tr>";
		echo "<tr><th>Nome</th><td>".$nome."</td></tr>";
		echo "<tr><th>Cognome</th><td>".$cognome."</td></tr>";
		echo "<tr><th>Ruolo</th><td>".$ruolo."</td></tr>";                                       
        
        
        
  		echo "</thead>";
    		
    	
        
                                        
	}//end count



?>