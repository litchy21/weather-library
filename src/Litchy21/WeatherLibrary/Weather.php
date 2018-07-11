<?php

namespace Litchy21\WeatherLibrary;


class Weather
{
    private $apiKey = '2021a1fdc0c0625b69ae1f01727e6512';

    /**
     * @return string
     */
    public function getWeather()
    {
        $client = new \GuzzleHttp\Client();

        $res = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
        echo $res->getStatusCode();
// 200
        echo $res->getHeaderLine('content-type');
// 'application/json; charset=utf8'
        echo $res->getBody();
// '{"id": 1420053, "name": "guzzle", ...}'

// Send an asynchronous request.
        $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
        $promise = $client->sendAsync($request)->then(function ($response) {
            echo 'I completed! ' . $response->getBody();
        });
        $promise->wait();

        return 'It\'s nice!';
    }
}