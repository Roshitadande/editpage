<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Page</title>
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
  
  input[type="text"], input[type="email"], input[type="tel"],input[type="text"] {
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
  
  input[type="submit"], button {
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
  
  input[type="submit"]:hover, button:hover {
    background-color: #005f76;
  }
</style>
</head>
<body>
  <form action="conn.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="phone">Phone No:</label>
    <input type="tel" id="phone" name="phone" required><br>
    <label for="branch">Branch:</label>
    <input type="text" id="branch" name="branch" required><br>

    <label>Gender:</label>
    <input type="radio" id="male" name="gender" value="male" required>
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female" required>
    <label for="female">Female</label>
    <input type="radio" id="other" name="gender" value="other" required>
    <label for="other">Other</label><br>

    <label>Extra Services:</label><br>
    <input type="checkbox" id="hostel" name="hostel" value="1">
    <label for="hostel">Hostel</label><br>
    <input type="checkbox" id="mess" name="mess" value="1">
    <label for="mess">Mess</label><br>
    <input type="checkbox" id="bus" name="bus" value="1">
    <label for="bus">Bus</label><br>

    <input type="submit" value="Register">
    <a href="studentinfo.php">Back</a>
  </form>
</body>
</html>
