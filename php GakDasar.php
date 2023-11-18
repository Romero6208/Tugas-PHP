<?php

echo date('d-m-y',12345676890) , "<br>";
echo time() . "<br>";

$timestamp = 1234567890;
$stringdate = date('d-m-Y H:i', $timestamp);

echo "timestamp: [$timestamp] <br>";
echo "string date: [$stringdate] <br>";

echo strtotime("now") . "<br>";
echo strtotime("next year") . "<br>";
