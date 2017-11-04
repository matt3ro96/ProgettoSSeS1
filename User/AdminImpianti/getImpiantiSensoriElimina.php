<?php 
$host="localhost"; // Hostname 
$username="sses"; // Mysql username 
$password="titosorez"; // Mysql password 
$db_name="my_sses"; //Nome del Database 
// Procedimento per connettersi al Database 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");  
session_start();
$username= $_SESSION['username'];
// Nome utente e password inviate attraverso il form 
$sql="SELECT DISTINCT CodImp, Nome, TipoImp, DataCreazione, AziendaAssociata FROM Impianto JOIN ResponsabilitaAmministratoreAzienda ON AziendaAssociata=Azienda WHERE Impianto.AmministratoreImpianto='$username'"; 
$result=mysql_query($sql); 
// Mysql_num_row is counting table row 
$count=mysql_num_rows($result);

if($count>=1){ 

  while ($row = mysql_fetch_assoc($result)) {
    $codice = $row['CodImp'];
    $nome = $row['Nome'];
    $tipo = $row['TipoImp'];
    $data = $row['DataCreazione'];
    $azienda = $row['AziendaAssociata'];
    
    echo "<tr>";
    echo "<td>".$codice."</td>";
    echo "<td>".$nome."</td>";
    echo "<td>".$tipo."</td>";
    echo "<td>".$data."</td>";
    echo "<td>".$azienda."</td>";
    echo "<td> 
    <form action=\"rimuoviSensori.php\" method=\"POST\">
    <input type=\"hidden\" value=".$codice." name=\"myImpianto\">
    <input type=\"hidden\" value=".$azienda." name=\"myAzienda\">
    <input value=\"Gestisci\" style=\"font-weight: bold; height:25px; width:110px; font-size:15px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;\" align=\"right\" type=\"Submit\";>
    </form>
    </td>";
    echo "</tr>";
  }
  
}

?>