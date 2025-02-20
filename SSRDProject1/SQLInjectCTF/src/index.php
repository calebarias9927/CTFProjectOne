<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "db";
$username = "root";
$password = "rootroot";
$dbname = "sqli_ctf";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Debugging output:
    // echo "<pre>Debugging SQL Query: SELECT * FROM users WHERE username='$user' AND password='$pass'</pre>";

    // Vulnerable SQL Query
    $query = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $result = $conn->query($query);

    if (!$result) {
        die("SQL Error: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            echo "<p><strong>Password:</strong> " . htmlspecialchars($row['password']) . "</p>";
        }
    }
}
?>

<html>
<body>
    <h2>Login</h2>
    <form method="post">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
