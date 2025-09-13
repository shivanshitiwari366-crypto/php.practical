<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>
    <h2>Enter Your Name</h2>
    <form method="post" action="welcome.php">
        Name: <input type="text" name="username" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'])) {
        $name = htmlspecialchars($_POST['username']); // XSS safe
        echo "<h3>Welcome, $name!</h3>";
    }
    ?>
</body>
</html>
