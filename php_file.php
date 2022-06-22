
<html>

<head>
    <title>Writing a file using PHP</title>
</head>

<body>

<?php
$filename = "./tmp/php8.1.txt";
$file = fopen( $filename, "r" );

if( $file == false ) {
    echo ( "Error in opening file" );
    exit();
}

$filesize = filesize( $filename );
$filetext = fread( $file, $filesize );

fclose( $file );

echo ( "File size : $filesize bytes" );
echo ( "$filetext" );
echo("file name: $filename");
?>

</body>
</html>