<?php

//require 'vendor/autoload.php';
require __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client;

class WeatherInformation
{
    private $cityName;
    private $countryCode;
    const API_KEY = "1f2c4527291b18aaab758440a1f8e071";
    private $client;

    public function __construct($cityName = "", $countryCode = "") {
        $this->cityName = $cityName;
        $this->countryCode = $countryCode;

        // Initialize Guzzle client
        $this->client = new Client([
            'base_uri' => 'https://api.openweathermap.org/',
            'timeout'  => 2.0,
        ]);
    }

    public function getWeatherData() {
        try {

            $apiUrl = "data/2.5/weather?q=" . urlencode($this->cityName) . "," . $this->countryCode . "&appid=" . self::API_KEY;

            $response = $this->client->request('GET', $apiUrl);


            return json_decode($response->getBody(), true);
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

    public function getWeatherIconUrl() {
        $data = $this->getWeatherData();
        return isset($data['weather'][0]['icon'])
            ? 'https://openweathermap.org/img/wn/' . $data['weather'][0]['icon'] . '@2x.png'
            : '';
    }
}

