<?php
    $db_host        = '127.0.0.1';
    $db_user        = 'root';
    $db_pass        = '';
    $db_database    = 'phptest';
    $db_port        = '3306';

    $connection = mysqli_connect($db_host,$db_user,$db_pass,$db_database,$db_port);

    if(!$connection ) {
        die('Could not connect: ' . $this->connection->mysqli_error);
    }