<!DOCTYPE html>
<html>
<head>
    <title>Result Page</title>
</head>
<body>
    <h2>Enter Your Marks</h2>
    <form method="get" action="result.php">
        Marks: <input type="number" name="marks" required><br><br>
        <input type="submit" value="Check Result">
    </form>

    <?php
    if (isset($_GET['marks'])) {
        $marks = (int)$_GET['marks'];

        if ($marks >= 40) {
            echo "<h3>Result: PASS 🎉</h3>";
        } else {
            echo "<h3>Result: FAIL ❌</h3>";
        }
    }
    ?>
</body>
</html>
