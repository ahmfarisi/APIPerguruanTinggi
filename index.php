<?php
$json = file_get_contents('https://api.ahmfarisi.com/perguruantinggi');
echo $json;

//if you want to decode the json, uncomment the codes below
//$obj = json_decode($json);
//print_r($obj);