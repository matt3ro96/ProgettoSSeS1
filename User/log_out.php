<?php
//questa funzione la si mette sempre prima di utilizzare i metodi per la sessione
session_start();
//quando facciamo il log-out cancelliamo la sessione.
session_destroy();
header("location:..\index.php?logout=1");
?> 