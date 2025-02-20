<!DOCTYPE html>
<html>
<head>
    <title>DNS Lookup</title>
</head>
<body>
    <h1>DNS Lookup</h1>
    <form method="post" action="">
        <label for="domain">Enter a domain:</label>
        <input type="text" name="domain" id="domain" required>
        <input type="submit" name="lookup" value="Lookup">
    </form>

    <?php
    if (isset($_POST['lookup'])) {
        $domain = $_POST['domain'];
        // Command injection vulnerability
        $output = shell_exec("nslookup $domain 2>&1");
        echo "<h2>Lookup Output:</h2>";
        echo "<pre>$output</pre>";
    }
    ?>
</body>
</html>
