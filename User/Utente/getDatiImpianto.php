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
$user= $_SESSION['username'];
$sql= "SELECT CodImp, Nome, DataCreazione, TipoImp, count(CodSen) from (Impianto join Sensori on CodImp = Sensori.Impianto) join AutorizzazioneClienti on CodImp = AutorizzazioneClienti.Impianto where cliente = '$user' group by CodImp";
$result=mysql_query($sql); 
// Mysql_num_row is counting table row 
$count=mysql_num_rows($result); 
if($count>=1){ 

  while ($row = mysql_fetch_assoc($result)) {
    $cod = $row['CodImp'];
    $nome = $row['Nome'];
    $tipoImpianto = $row['TipoImp'];
    $dataCreazione = $row['DataCreazione'];
    $numeroSensori=$row['count(CodSen)'];
     
     
    echo "<tr>";
    echo "<td>".$cod."</td>";
    echo "<td>".$nome."</td>";
    echo "<td>".$tipoImpianto."</td>";
    echo "<td>".$dataCreazione."</td>";
    echo "<td>".$numeroSensori."</td>";
    echo "</tr>";
  }
  
}

?>