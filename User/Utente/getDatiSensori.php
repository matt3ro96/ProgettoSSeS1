<?php 
$host="localhost"; // Hostname 
$username="sses"; // Mysql username 
$password="titosorez"; // Mysql password 
$db_name="my_sses"; //Nome del Database 
$tbl_name="Sensori"; // Nome della Tabella 
// Procedimento per connettersi al Database 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");  
session_start();
$user= $_SESSION['username'];
// Nome utente e password inviate attraverso il form 
$sql="SELECT Sensori.CodSen, Sensori.Tipo, Sensori.Marca, Impianto.Nome, Rilevazioni.Data, Rilevazioni.Valore from ((Impianto join Sensori on CodImp = Sensori.Impianto) join AutorizzazioneClienti on CodImp = AutorizzazioneClienti.Impianto) join Rilevazioni on CodSen= Rilevazioni.Sensore where cliente = '$user' order by Data"; 
$result=mysql_query($sql); 
// Mysql_num_row is counting table row 
$count=mysql_num_rows($result); 

if($count>=1){ 

  while ($row = mysql_fetch_assoc($result)) {
    $cod = $row['CodSen'];
    $tipo = $row['Tipo'];
    $marca = $row['Marca'];
    $impianto = $row['Nome'];
    $rilevazione = $row['Valore'];
    $dataRil = $row['Data'];
    
    echo "<tr>";
    echo "<td>".$cod."</td>";
    echo "<td>".$tipo."</td>";
    echo "<td>".$marca."</td>";
    echo "<td>".$impianto."</td>";
    echo "<td>".$rilevazione."</td>";
    echo "<td>".$dataRil."</td>";
    echo "</tr>";
  }
  
}

?>