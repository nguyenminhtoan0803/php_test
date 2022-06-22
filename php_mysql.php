<?php

$dbhost = 'localhost:3036';
$dbuser = 'root@localhost';
$dbpass = '1234';
$conn = new mysqli($dbhost, $dbuser, $dbpass);
if ($conn->connect_error) {
    die('Could not connect: ' . $conn->connect_error);

}
echo 'Connected successfully';
mysqli_close($conn);
?>