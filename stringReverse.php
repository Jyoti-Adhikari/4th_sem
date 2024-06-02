<!DOCTYPE html>
<html>
<head>
    <title>Reversed String</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userString = $_POST['userString'];
    $reversedString = strrev($userString);
    echo "<h3>Reversed String: $reversedString</h3>";
} else {
    echo "<h3>No string was provided!</h3>";
}
?>

</body>
</html>
