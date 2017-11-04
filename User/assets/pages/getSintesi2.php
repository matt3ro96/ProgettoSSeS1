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
$sql="SELECT  CodImp, Tipo, Avg(Rilevazioni.Valore) AS MediaValori from ((Impianto join Sensori on CodImp = Impianto) join Rilevazioni on CodSen = Sensore)join AutorizzazioneClienti on AutorizzazioneClienti.Impianto = CodImp where cliente = '$user' Group By Tipo,CodImp ORDER BY CodImp,Nome,Tipo";
$result=mysql_query($sql); 
// Mysql_num_row is counting table row 
$count=mysql_num_rows($result); 

if($count>=1){ 

   //Array che conterrà i dati letti dal DB
  $data = array();
  //Riempimento dell'array data
  while($record = mysql_fetch_assoc($result)){
    array_push($data, $record);
  }
 
  //Restituisce i dati in formato JSON
  echo json_encode($data);       
}

?>