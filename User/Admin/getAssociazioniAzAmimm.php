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
$sql="SELECT AmministratoreImpianto, RagioneSociale FROM ResponsabilitaAmministratoreAzienda join Azienda on ResponsabilitaAmministratoreAzienda.Azienda = CodAz ORDER BY AmministratoreImpianto";
$result=mysql_query($sql); 
// Mysql_num_row is counting table row 
$count=mysql_num_rows($result);

if($count>=1){ 

  while ($row = mysql_fetch_assoc($result)) {
    $username = $row['AmministratoreImpianto'];
    $azienda = $row['RagioneSociale'];

    
  echo "<tr>";
    echo "<td>".$username."</td>";
    echo "<td>".$azienda."</td>";
    echo "<td>";
       echo"<form action=\"eliminaAssociazione.php\" method=\"POST\">
    <input type=\"hidden\" value=".$username." name=\"myUser\">
    <input type=\"hidden\" value=".$azienda." name=\"myAzienda\">
    <input value=\"Elimina\" style=\"font-weight: bold; height:25px; width:110px; font-size:15px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;\" align=\"right\" type=\"Submit\";>
    </form>
    </td>";
    echo "</tr>";
 }}



?>