<?php

require 'Currency.php';
require 'Bot.php';
require 'weather/Weather_information.php';

$bot = new Bot();
$currency = new Currency();
$weather = new WeatherInformation("Tashkent", "uz"); // Set default city and country code

$update = json_decode(file_get_contents('php://input'));

$text = $update->message->text ?? '';
$from_id = $update->message->from->id ?? '';


if ($text == '/start') {
    $response = $bot->makeRequest('sendMessage', [
        'chat_id' => $from_id,
        'text' => "Hello World! <a href='https://core.telegram.org/bots/api#message'>dkvnknv</a>",
        'parse_mode' => 'html'
    ]);

    if (!$response->ok) {
        $bot->makeRequest('sendMessage', [
            'chat_id' => $from_id,
            'text' => json_decode($response)
        ]);
    }
}


if ($text == '/currency') {
    $currencies = $currency->getCurrencies();
    $currency_list = "";

    foreach ($currencies as $currency => $rate) {
        $currency_list .= $currency . ": " . $rate . "\n";
    }

    $bot->makeRequest('sendMessage', [
        'chat_id' => $from_id,
        'text' => $currency_list
    ]);
}

if ($text == '/weather') {
    $weather_info = $weather->getWeatherData();

    if (isset($weather_info['cod']) && $weather_info['cod'] == 200) {
        $temperature = $weather_info['main']['temp'] - 273.15;
        $description = $weather_info['weather'][0]['description'];
        $humidity = $weather_info['main']['humidity'];
        $wind_speed = $weather_info['wind']['speed'];


        $weather_text = "Tashkent Weather:\n";
        $weather_text .= "Temperature: " . round($temperature, 1) . "°C\n";
        $weather_text .= "Description: " . ucfirst($description) . "\n";
        $weather_text .= "Humidity: " . $humidity . "%\n";
        $weather_text .= "Wind Speed: " . $wind_speed . " m/s\n";

        $bot->makeRequest('sendMessage', [
            'chat_id' => $from_id,
            'text' => $weather_text
        ]);
    } else {
        $bot->makeRequest('sendMessage', [
            'chat_id' => $from_id,
            'text' => "Failed to retrieve weather data. Please try again later."
        ]);
    }
}











//$bot=new Bot();
//$bot->makeRequest('sendMessage',[
//    'chat_id'=>1184585040,
//    'text'=>'Hello from Bot'
//]);
//$bot->makeRequest('sendVideo',[
//    'chat_id'=>1184585040,
//    'video'=>'https://www.w3schools.com/html/mov_bbb.mp4'
//]);
