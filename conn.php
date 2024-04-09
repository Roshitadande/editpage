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

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$branch = $_POST['branch'];
$hostel = isset($_POST['hostel']) ? 1 :0;
$mess = isset($_POST['mess']) ? 1 : 0;
$bus = isset($_POST['bus']) ? 1 : 0;


// Insert data into database
$sql = "INSERT INTO student (name, email, phone, branch,gender,hostel,mess,bus) VALUES ('$name', '$email', '$phone', '$branch','$gender','$hostel','$mess','$bus')";

if (mysqli_query($conn, $sql)) {
  echo "Registration successful!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
