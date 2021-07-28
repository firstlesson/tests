<?php

//c22a227c97014308077c13856ec50e68

$url = 'http://api.openweathermap.org/data/2.5/weather';

$options = array(
    'q' => 'Uman',
    'APPID' => 'c22a227c97014308077c13856ec50e68',
    'units' => 'metric',
    'lang' => 'en',
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url . '?' . http_build_query($options));

$response = curl_exec($ch);
$data = json_decode($response, true);
curl_close($ch);

echo '<pre>';
print_r($data);