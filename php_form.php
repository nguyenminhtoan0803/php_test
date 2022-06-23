<html>

<head>
    <title>Add New Record in MySQL Database</title>
</head>

<body>
<?php
    require_once 'connect_mysql.php';
    
    if(isset($_POST['add'])) {


        $emp_name = addslashes ($_POST['emp_name']);
        $emp_address = addslashes ($_POST['emp_address']);
        // }else {
        //     $emp_name = $_POST['emp_name'];
        //     $emp_address = $_POST['emp_address'];
        // }

        $emp_salary = $_POST['emp_salary'];

        $sql = "INSERT INTO employee ". "(emp_name,emp_address, emp_salary) ". "VALUES('$emp_name','$emp_address',$emp_salary)";

        $retval = mysqli_query($connection, $sql);

        if(! $retval ) {
            die('Could not enter data: ' .  $this->retval->mysqli_error());
        }

        echo "Entered data successfully\n";

        mysqli_close($connection);
    }else {
    ?>
    <?php
    }
?>

</body>
</html>