<?php
$access_token = 'CnIvIPFouqOPaZh03F6S/Ongw17vFYSci1jizDpDlOX2uCS7t+YBpfRbLILkpwgvgTTAhxO5SIrmOQPHcSKpZ7nSauF+oOHz84VVRM3jPPWngEjIz0uYnj4ADNWbmZX7x+4YdE793/mGc05q1r3BMQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
