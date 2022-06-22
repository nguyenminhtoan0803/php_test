<?php
    require_once 'connect_mysql.php';

    $sql = 'SELECT emp_id, emp_name FROM employee';
    $result = mysqli_query($connection, $sql);

    if(!$result){
        die('could not get data' . $this->result->mysqli_error);
    }

    while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
        echo "EMP ID :{$row['emp_id']}  <br> ".
            "EMP NAME :{$row['emp_name']}  <br> ";
    }

    echo "Fetched data successfully\n";
mysqli_free_result($result);
  mysqli_close($connection);
