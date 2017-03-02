<?php
$access_token = 'DCIp/W+z2xakOLOQ1Jbz/Lz8qpOqsmkNtXKtzGGFjZomMIORZ14wX3wA2q87NRFaE74UXv8XQfGgKer+hSyu2UoJpmyPhnDPd3kOrkIFyDynIWdm7fUjvqK7M7Uxg9daPwlD9C7HX9OIuIHcOIRmgwdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>
