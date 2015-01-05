<?php
$var2='jimmy';
$var4='12345';
$var1= 'data": [
                    {
                        "label": "14:00",
                        "value": "320000"
                    },
                    {
                        "label": "14:10",
                        "value": "110000"
                    },
                    {
                        "label": "'.$var4.'",
                        "value": "'.$var2.'"
                    },
                    {
                        "label": "14:30",
                        "value": "190000"
                    },
                    {
                        "label": "14:40",
                        "value": "490000"
                    },
                    {
                        "label": "14:50",
                        "value": "310000"
                    },
                    {
                        "label": "15:00",
                        "value": "280000"
                    }
                ]
            };';
echo $var1;

$myFile = "/usr/share/nginx/www/json_data/test_output.txt";
echo $myFile;
$fh = fopen($myFile, 'w') or die("can't open file");
fwrite($fh, $var1);
fclose($fh);


//$variableName = 'Ralph';
//$var3 = 'Hello '.$variableName.'!';
//echo $var3

//$variableName = 'Ralph';
//echo 'Hello '.$variableName.'!';
?>


