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
// Nome utente e password inviate attraverso il form 
$sql="SELECT Username, Matricola, Nome, Cognome, Password from Utenti "; 
$result=mysql_query($sql); 
// Mysql_num_row is counting table row 
$count=mysql_num_rows($result);

if($count>=1){ 

  while ($row = mysql_fetch_assoc($result)) {
    $username = $row['Username'];
    $matricola = $row['Matricola'];
    $nome = $row['Nome'];
    $cognome = $row['Cognome'];
    $password = $row['Password'];
    
    echo "<tr>";
    echo "<td>".$username."</td>";
    echo "<td>".$matricola."</td>";
    echo "<td>".$nome."</td>";
    echo "<td>".$cognome."</td>";
    echo "<td>".$password."</td>";
    echo "<td> ";
    echo"<form action=\"eliminaUtente.php\" method=\"POST\">
    <input type=\"hidden\" value=".$username." name=\"myUser\">
    <input value=\"Elimina\" style=\"font-weight: bold; height:25px; width:110px; font-size:15px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;\" align=\"right\" type=\"Submit\";>
    </form>
    </td>";
    echo "</tr>";
  }
  
}

?>
