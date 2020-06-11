<?php

   include "connection.php";

   $sql = "CREATE DATABASE ashiap";

   if($connection->query($sql) === TRUE){
       echo "Database successfully created";
   }else {
       echo "Database creation failed";
   }

?>