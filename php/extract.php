<?php
extract( $_REQUEST );
echo $_REQUEST;
$var1 = "a.$_REQUEST.";
print_r($var1);

$myFile = "/usr/share/nginx/www/json_data/extract.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
fwrite($fh, $var1);
fclose($fh);

?>