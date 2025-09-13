<?php
// Check if the "name" parameter is passed in the URL
if (isset($_GET['name']) && !empty($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']); // Prevent XSS by escaping
    echo "Hello, " . $name;
} else {
    echo "Hello, Rahul";
}
?>
