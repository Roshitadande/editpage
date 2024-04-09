<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Student Information</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  
  form {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  input[type="text"], input[type="email"], input[type="tel"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  label {
    font-weight: bold;
  }
  
  input[type="radio"] {
    margin-right: 10px;
  }
  
  input[type="submit"] {
    background-color: #008CBA;
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 4px;
  }
  
  input[type="submit"]:hover {
    background-color: #005f76;
  }
</style>
</head>
<body>
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

// Get student ID from query string
$student_id = $_GET['id'];

// Fetch student data from database
$sql = "SELECT id, name, email,phone FROM student WHERE id=$student_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
?>

  <form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    
    <label for="name">Name:</label>
    <input type="text" id="name" name="new_name" value="<?php echo $row['name']; ?>" ><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="new_email" value="<?php echo $row['email']; ?>" ><br>

    <label for="phone">Phone No:</label>
    <input type="tel" id="phone" name="new_phone" value="<?php echo $row['phone']; ?>" ><br>
    <input type="submit" value="Update">
    <a href="studentinfo.php">back</a>
  </form>

<?php
} else {
  echo "Student not found";
}
 mysqli_close($conn);









?>

</body>
</html>


