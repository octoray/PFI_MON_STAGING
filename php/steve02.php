<?php
ob_start();

//$x = 1;

//while($x <= 5) {
    //echo "The number is: $x <br>";
 //   $x++;
//}


if (isset($_GET))
{
    $amount= $_GET;}

echo "sending amount below times";
echo "<br>";
echo $amount;


$steve =
'{
    "customerFirstName": "Steven",
    "customerLastName": "Woodley",
    "customerContactNumber": "447788318651",
    "customerEmailAddress": "steve.woodley@IMIMobile.com",
    "customerUsername": "steve.woodley@IMIMobile.com",
    "customerAccountAddress": "69, LITHOS RD, LONDON, NW36EY, GB",
    "orderType": "Upgrade",
    "expiryDateTime": "2014-11-21T13:36:21Z",
    "ccaGeneratedDateTime": "2014-11-18T13:36:21Z",
    "ccaMinutesToInitialAlert": 60,
    "customerMSISDN": "447788318651",
    "ccaLink": "http://www.o2.co.uk/checkout/order/53afd011498e40d59cf5cb7f",
    "orderState": "PreSubmission",
    "creditCheckCompleted": false,
    "secciViewed": false,
    "keyInfoViewed": false,
    "payMonthlyTermsViewed": false,
    "ccaGenerated": true,
    "ccaSigned": false,
    "customerDeliveryAddress": "69, LITHOS RD, LONDON, NW36EY, GB",
    "lineItems": [
        {
            "type": "plan",
            "description": "24 months, Unlimited minutes, Unlimited texts",
            "skuOrPid": "T:CR5911:UnlimitedMins:24M:2GB:GBP18:S2:CCA",
            "price": {
                "monthlyPence": 1800
            }
        },
        {
            "type": "device",
            "description": "Apple iPhone 6 Plus 128GB Gold",
            "skuOrPid": "MGAF2B/A",
            "price": {
                "oneOffPence": 3999,
                "monthlyPence": 3500
            }
        },
        {
            "type": "dataallowance",
            "description": "2GB",
            "skuOrPid": "B:CR6188:2GB:DataWiFi:iPhone:PRIMARY:INC:bolton",
            "price": {
                "monthlyPence": 0
            }
        }
    ],
    "receiveO2Marketing": true,
    "isCca": true
}';



function sendmessage($input) {
    $ch = curl_init('http://172.16.10.31:8081/win-smsgwweb/winmt');
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER,'Authorization: Basic bzI6bzI=');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_URL, 'http://172.16.10.31:8081/win-smsgwweb/winmt');
    curl_setopt($ch, CURLOPT_POST, 1);

    $query = http_build_query($input);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);

    $runy = curl_exec($ch);
    $info = curl_getinfo($ch);
    echo '<br>';
    echo $info['url'];
    echo '<br>';
    echo $info['body'];
    echo '<br>';
    echo $info['request_header'];
    echo '<br>';

    echo $runy;
}


sendmessage($steve);

?>