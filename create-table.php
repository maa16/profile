<?php
  include "connection.php";

  $sql = "CREATE TABLE person(
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      nama VARCHAR(50) NOT NULL,
      role VARCHAR(50) NOT NULL,
      availability VARCHAR(50),
      age INT(4),
      location VARCHAR(50),
      years_experience VARCHAR(50),
      email VARCHAR(50)
  )";

  if($connection->query($sql) == TRUE){
      echo "Table successfully created";
  } else {
      echo "Table creation failed";
  }
?>