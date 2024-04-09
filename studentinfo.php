<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Table Data</title>
</head>
<body>
<header>
    <div class="navbar">

       <h1>Student Info</h1>

       <a href="registration.php" class="btn">Add new student</a>

</header>
<hr>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Branch</th>
            <th>Action</th>
        </tr>
        <?php
        // Connect to database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "studentinfo";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch data from database
        $sql = "SELECT id, name, email,phone,gender,branch FROM student";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "<td>" . $row["branch"] . "</td>";

                echo "<td>";
                echo "<a href='edit.php?id=" . $row["id"] . "'>Edit</a> | ";
                echo "<a href='delete.php?id=" . $row["id"] . "' onclick=\"return confirm('Are you sure you want to delete this item?');\">Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No records found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
