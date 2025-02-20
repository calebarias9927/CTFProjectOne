<!DOCTYPE html>
<html>

<head>
    <title>Ping</title>
</head>

<body>
    <h1>Ping</h1>

    <form method="post" action="">
        <label for="server">Enter a host address:</label>
        <input type="text" name="server" id="server" required>
        <input type="submit" name="ping" value="Ping">
    </form>

    <?php
    if (isset($_POST['ping'])) {
        $server = $_POST['server'];
        $output = shell_exec("ping -c 4 $server 2>&1");
        echo "<h2>Ping Output:</h2>";
        echo "<pre>$output</pre>";
    }
    ?>
</body>

</html>
