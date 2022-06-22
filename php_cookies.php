
<html>

<head>
    <title>Setting Cookies with PHP</title>
</head>

<body>
<?php
setcookie("name", "John Watkin", time()+3600, "/","", 0);
setcookie("age", "36", time()+3600, "/", "",  0);

echo $_COOKIE["name"]. "<br />";

echo $_COOKIE["age"] . "<br />";

if( isset($_COOKIE["name"]))
    echo "Welcome " . $_COOKIE["name"] . "<br />";

else
    echo "Sorry... Not recognized" . "<br />";

?>
</body>

</html>