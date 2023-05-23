<h1>Cloud computing application development</h1>
<h4>Lab 6 - Docker Compose</h4>
<?php
$host = 'mysql';
$user = 'root';
$pass = 'pass';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Failed to connect to MySQL database: " . $conn->connect_error);
} else {
    echo "Successfully connected to MySQL database";
}

?>