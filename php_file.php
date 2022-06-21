<!doctype html>
<html lang="en">
<body>
<?PHP
$filename = "D://tmp//php8.1.txt";
$file = fopen("D:\\tmp\\php8.1.txt", "r");

if(!$file){
    echo "file not found";
    exit();
}

$filesize = filesize($filename);
$filetext = fread($file, $filesize);

fclose($file);

echo ( "File size : $filesize bytes" );
echo ( "<pre>$filetext</pre>" );
?>
</body>
</html>