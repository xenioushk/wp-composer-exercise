<?php

include_once __DIR__ . '/vendor/autoload.php';

use WPCOMPOSER\WeatherForcast;

$weather = new WeatherForcast();

echo "The weather is " . $weather->get_the_weather()['temperature'] . " degrees and the humidity is " . $weather->get_the_weather()['humidity'] . "%";