<?php
$access_token = 'VmIr0HrHco/aMpmfv4KtS8e6G9A57b9b6QkXt4EItz1qLqHvMdFPNAHZn60tVAvp5nwApwwTNZhmv2WuUG3/mYlmrC10aR31021CXs+2t3vWknavEm36b7Gx1kEhWLf1pji8wOjyF3TARFPMyHgzpAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;