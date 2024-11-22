<?php

require __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client;

class WeatherInformation
{
    private $cityName;
    private $countryCode;
    const API_KEY = "1f2c4527291b18aaab758440a1f8e071";
    private $client;

    public function __construct($cityName = "", $countryCode = "UZ") {
        $this->cityName = $cityName;
        $this->countryCode = $countryCode;

        $this->client = new Client([
            'base_uri' => 'https://api.openweathermap.org/',
            'timeout'  => 5.0,
        ]);
    }

    public function getWeatherData() {
        try {
            $apiUrl = "data/2.5/weather?q=" . urlencode($this->cityName) . "," . $this->countryCode . "&appid=" . self::API_KEY;

            $response = $this->client->request('GET', $apiUrl);
            $data = json_decode($response->getBody(), true);

            if (isset($data['main'])) {
                return [
                    'success' => true,
                    'data' => $data
                ];
            } else {
                return [
                    'success' => false,
                    'message' => $data['message'] ?? 'API maʼlumotni qaytara olmadi.'
                ];
            }
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }

    public function getWeatherIconUrl() {
        $weatherData = $this->getWeatherData();

        if ($weatherData['success'] && isset($weatherData['data']['weather'][0]['icon'])) {
            return 'https://openweathermap.org/img/wn/' . $weatherData['data']['weather'][0]['icon'] . '@2x.png';
        }

        return '';
    }
}
?>
