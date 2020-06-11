<?php
   $db_host = "127.0.0.1:3306";
   $db_username = "root";
   $db_password = "";
   $db_name = "ashiap";

   $connection = new mysqli($db_host, $db_username, $db_password, $db_name);

   if ($connection ->connect_error){
       die("Connection to database failed.");
   }
    
?>