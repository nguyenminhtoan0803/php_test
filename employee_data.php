<?php
    require_once 'connect_mysql.php';

    $sql = 'SELECT emp_id, emp_name FROM employee';
    $result = mysqli_query($connection, $sql);

    if (!$result) {
        die('could not get data' . $this->result->mysqli_error);
    }

    
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

        $myJSON = json_encode($row);

        echo $myJSON;
    }

    echo "Fetched data successfully\n";
    mysqli_free_result($result);
    mysqli_close($connection);
?>