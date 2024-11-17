<?php
class WeatherInformation{
    private $cityName;
    private $countryCode;
    const API_KEY = "1f2c4527291b18aaab758440a1f8e071";

    public function __construct($cityName = "", $countryCode = "") {
        $this->cityName = $cityName;
        $this->countryCode = $countryCode;
    }

    public function getWeatherData() {

        $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q=" . urlencode($this->cityName) . "," . $this->countryCode . "&appid=" . self::API_KEY;


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);
        curl_close($ch);


        return json_decode($response, true);
    }

    public function getWeatherIconUrl() {
        $data = $this->getWeatherData();
        return isset($data['weather'][0]['icon'])
            ? 'https://openweathermap.org/img/wn/' . $data['weather'][0]['icon'] . '@2x.png'
            : '';
    }
}


$cityName = isset($_GET['city']) ? $_GET['city'] : 'Toshkent';

$countryCode = isset($_GET['country']) ? $_GET['country'] : 'uz';

$weather = new WeatherInformation($cityName, $countryCode);
$weatherData = $weather->getWeatherData();


require 'weather.php';
?>
