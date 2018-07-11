<?php

namespace Litchy21\WeatherLibrary;

use GuzzleHttp\Client;

class Weather
{
    private $apiKey = '2021a1fdc0c0625b69ae1f01727e6512';

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getWeather()
    {
        $client = new Client();

        $uri = '/data/2.5/weather?q=Paris&APPID='.$this->apiKey;
        $res = $client->request('GET', $uri);

        $data = $res->getBody();

        return [
            'city' => $data['name'],
            'description' => $data['weather'][0]['main']
        ];
    }
}