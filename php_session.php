<?php
session_start();

if(isset($_SESSION['counter'])){
    $_SESSION['counter'] += 133;
}else{
    $_SESSION['counter'] = 122;
}
$msg = "You have visited this page ".  $_SESSION['counter'];
$msg .= "in this session.";

?>
<html>

<head>
    <title>Setting up a PHP session</title>
</head>

<body>
<?php  echo ( $msg );
unset($_SESSION['counter']);//delete 1 session
session_destroy();//delete tat ca cac session hien co
?>
</body>

</html>
