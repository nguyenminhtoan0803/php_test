<?php

    require_once 'connect_mysql.php';

   $table_name = "employee";
   $backup_file  = "./tmp/employee.sql";
   $sql = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";
   
   $retval = mysqli_query($connection, $sql);
   
   if(! $retval ) {
      die('Could not take data backup: ' . $this->retval->mysql_error);
   }
   
   echo "Backedup  data successfully\n";
   
    mysqli_free_result($result);
    mysqli_close($connection);
