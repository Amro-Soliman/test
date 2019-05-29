<?php
$url = 'https://api.exchangeratesapi.io/latest/';
$file_content = file_get_contents($url);
// var_dump($file_content);
$value = json_decode($file_content);
echo $value->base;
echo "</br>";
echo $value->date;
echo "</br>";

echo "</br>";

echo "CAD : " . $value->rates->CHF;
echo "</br>";

echo "GBP : " . $value->rates->GBP;
echo "</br>";

echo "SEK : " . $value->rates->SEK;
echo "</br>";
echo "USD : " . $value->rates->USD;