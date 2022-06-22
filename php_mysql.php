<?php

$db_host        = '127.0.0.1';
$db_user        = 'root';
$db_pass        = '';
$db_database    = 'phptest';
$db_port        = '3306';

$connection = mysqli_connect($db_host,$db_user,$db_pass,$db_database,$db_port);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM employee";
$retval = mysqli_query( $connection,  $sql);

if(! $retval ) {
    die('Could not create table: ' . $this->retval->mysqli_error());
}
while($row = mysqli_fetch_array($retval))
{
    print_r($row);
}
mysqli_close($connection);

?>
