<?php
   define("HOST","localhost");
   define("DATABASE","callopening");
   define("USER","root");
   define("PASSWORD","");
   $conn = new PDO("mysql:dbname=".BANCO.";host=".HOST."",USER,PASSWORD);
   setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
   date_default_timezone_set('America/Sao_Paulo');
  
   $key = "callopening12345"; 
   
   session_start();

?>