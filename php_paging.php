<html> 
   <body>
      <?php
        require_once 'connect_mysql.php';
        $rec_limit = 2;
         /* Get total number of records */
         $sql = "SELECT count(emp_id) FROM employee ";
         $retval = mysqli_query($connection, $sql );
         
         if(!$retval ) {
            die('Could not get data: ' . $this->retval->mysqli_error);
         }
         $row = mysqli_fetch_array($retval, MYSQLI_NUM );

         $rec_count = $row[0];
         
         if( isset($_GET['page'] ) ) {
            $page = $_GET['page'] + 1;
            $offset = $rec_limit * $page ;
         }else {
            $page = 0;
            $offset = 0;
         }
         
         $left_rec = $rec_count - ($page * $rec_limit);
         $sql = "SELECT emp_id, emp_name, emp_salary ". 
            "FROM employee ". "LIMIT $offset, $rec_limit";
            
         $retval = mysqli_query( $connection, $sql);
         
         if(! $retval ) {
            die('Could not get data: ' . $this->connection-> mysqli_error());
         }
         
         while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
            echo "EMP ID :{$row['emp_id']}  <br> ".
               "EMP NAME : {$row['emp_name']} <br> ".
               "EMP SALARY : {$row['emp_salary']} <br> ".
               "--------------------------------<br>";
         }
         
         if( $page > 0 ) {
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a> |";
            echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
         }else if( $page == 0 ) {
            echo "<a href = \"$_SERVER\['PHP_SELF']?page = $page\">Next 10 Records</a>";
         }else if( $left_rec < $rec_limit ) {
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a>";
         }
         
         mysqli_free_result($retval);
         mysqli_close($connection);
      ?>
      
   </body>
</html>