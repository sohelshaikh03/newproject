<?php
         $eml = $_POST['email']; $psw=$_POST['psw']; echo $eml; echo $psw; $servername = "database-2.cu1yskay4xlz.ap-south-1.rds.a$
$password = "pass$123"; $dbname = "insta";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO users (email, pass) VALUES ('$eml','$psw')"; if ($conn->query($sql) === TRUE) { echo "New record
  created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(); ?>
