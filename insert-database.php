<?php

  include "connection.php";

  $sql = "INSERT INTO person(
      id,
      nama,
      role,
      availability,
      age,
      location,
      years_experience,
      email
  )VALUE (
      '1',
      'Arham',
      'Digital Artist',
      'Part Time',
      '13',
      'Jakarta',
      '2',
      'email@gmail.com'
  )";

  if($connection->query($sql) == TRUE){
      echo "Insert Data Successful";
  } else{
      echo "Insert Data Failed";
  }

?>