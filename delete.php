<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentinfo";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if student ID is provided
if (isset($_GET['id'])) {
  $student_id = $_GET['id'];

  // Delete student from database
  $sql = "DELETE FROM student WHERE id=$student_id";

  if (mysqli_query($conn, $sql)) {
    echo "Student deleted successfully!";
  } else {
    echo "Error deleting student: " . mysqli_error($conn);
  }
} else {
  echo "Student ID not provided";
}

mysqli_close($conn);
?>
