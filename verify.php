<?php
$access_token = 'AFgp1v3btl25qKoYTP3fmJYQHv4eA0lx1UshF4CHNySwa+PvHhSxsmE7xZdz/PXXiS6uxnqaK0R8Mbigje//RXoZv1W++POq2WTNQPKORo15qffE+6t2l9O5q0ZVSvfNCvRiDiLRWhYQ+4lkDrJOigdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
