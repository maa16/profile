<?php
  include "connection.php";

  if(isset($_POST['submit'])){
      $id = $_POST["id"];
      $nama = $_POST["name"];
      $role = $_POST["role"];
      $availability = $_POST["availability"];
      $age = $_POST["age"];
      $location = $_POST["location"];
      $experience = $_POST["years_experience"];
      $email = $_POST["email"];
  }

  $sql = "UPDATE person SET name = '$nama', role = '$role', availability = '$availability', age = '$age', location='$location', years_experience = '$experience', email = '$email' WHERE id = '$id'";

  if($connection->query($sql) == TRUE){
      echo "Data Update Successful";
  } else{
      echo "Data Update Failed";
  }
?>