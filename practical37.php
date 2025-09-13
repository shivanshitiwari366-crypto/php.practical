<!DOCTYPE html>
<html>
<head>
    <title>Details Page</title>
</head>
<body>
    <?php
    if (isset($_GET['name']) && isset($_GET['age'])) {
        $name = htmlspecialchars($_GET['name']); 
        $age = (int)$_GET['age']; 
        echo "<h2>Hello $name, you are $age years old.</h2>";
    } else {
        echo "<h2>Please provide both name and age in the URL.</h2>";
    }
    ?>
</body>
</html>
