<?php
$access_token = 'PrCpAOOBJJ9V1nYc9v9RN8PEo/IxSWw829NYnIcXFfNpW3ISPOeUJhrpnLNF+CmhyzX8HjsL4flCZEmt/rpvOPJjJ3DJrEKnYbt1BaVM+VbqNCY2VdZNrrZK7+I4U35ee6q6/Pc9wvsTcv5v12nLQwdB04t89/1O/w1cDnyilFU=';
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
