<?php

namespace WPCOMPOSER;

use GuzzleHttp\Client;

class WeatherForcast
{

  public function get_the_weather()
  {
    $client = new Client();

    $url = 'https://api.open-meteo.com/v1/forecast?latitude=60.1695&longitude=24.9354&current=temperature_2m,relative_humidity_2m,precipitation&hourly=temperature_2m&forecast_days=1';

    $response = $client->request('GET', $url);


    $current_weather = json_decode($response->getBody(), true);

    // return $current_weather['current'];

    return [
      "temperature" => $current_weather['current']['temperature_2m'],
      "humidity" => $current_weather['current']['relative_humidity_2m'],
    ];

    // return $response->getBody();
  }
}