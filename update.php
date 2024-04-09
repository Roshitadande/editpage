<?php


// Check connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentinfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$id = $_POST['id'];
$new_name = $_POST['new_name'];
$new_email = $_POST['new_email'];
$new_phone = $_POST['new_phone'];





$sql = "UPDATE student SET name='$new_name', email='$new_email', phone='$new_phone',gender='$new_gender' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();


?>