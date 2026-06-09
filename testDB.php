<!DOCTYPE html>
<html>
<body>

<?php
// TEST DB WITH SELECT ON RENDER

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firstdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM myStudents";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] .
             " - Name: " . $row["firstname"] .
             " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>