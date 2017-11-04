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
$sql="SELECT CodImp, Impianto.Nome, Tipo, Avg(Rilevazioni.Valore) AS MediaValori, Count(Tipo) AS NumeroRilevazioni from ((Impianto join Sensori on CodImp = Impianto) join Rilevazioni on CodSen = Sensore)join AutorizzazioneClienti on AutorizzazioneClienti.Impianto = CodImp where cliente = '$user' Group By Tipo,CodImp ORDER BY CodImp,Nome,Tipo";
$result=mysql_query($sql); 
// Mysql_num_row is counting table row 
$count=mysql_num_rows($result); 

if($count>=1){ 
  
  while ($row = mysql_fetch_assoc($result)) {
    
    $codImp=$row['CodImp'];
    $impianto = $row['Nome'];
    $tipo = $row['Tipo'];
    $rilevazione = $row['MediaValori'];
    $rilevazioneN = $row['NumeroRilevazioni'];
    
    switch($tipo){
    case "termometro":
          $rilevazione= $rilevazione." C°";
          break;
    case "luce":
         $rilevazione= $rilevazione." candela";
          break;
    case "vento":
          $rilevazione= $rilevazione." m/h";
          break;
    case "CO2":
          $rilevazione= $rilevazione." di CO2";
          break;
    case "CH4":
         $rilevazione= $rilevazione." di CH4";
          break;
    case "CO":      
         $rilevazione= $rilevazione." di CO";
          break; 
    case "umidita":      
         $rilevazione= $rilevazione." kg/m^3";
          break; 
     default:
          echo "Errore.";
    }
    
    echo "<tr>";
    echo "<td>".$codImp."</td>";
    echo "<td>".$impianto."</td>";
    echo "<td>".$tipo."</td>";
    echo "<td>".$rilevazione."</td>";
    echo "<td>".$rilevazioneN."</td>";
    echo "</tr>";

	}
  
}

?>