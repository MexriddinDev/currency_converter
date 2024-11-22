<?php

require 'Currency.php';
require 'Bot.php';
require 'weather/Weather_information.php';

$bot = new Bot();
$currency = new Currency();
$weather = new WeatherInformation("Tashkent", "uz");

$update = json_decode(file_get_contents('php://input'));
if (isset($update)) {
    $message = $update->message;
    $from_id = $message->from->id;
    $chatId = $message->chat->id;
    $text = $message->text;
    $user_name = $message->from->username;


    if ($text == '/start') {
        $bot->saveUser($from_id, $user_name);
        $reply_keyboard = [
            'keyboard' => [
                [
                    ['text' => 'Ob havo'],
                    ['text' => 'Valyuta']  //
                ]
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => false
        ];


        $bot->makeRequest('sendMessage', [
            'chat_id' => $chatId,
            'text' => "Quyidagi tugmalardan birini tanlang:",
            'reply_markup' => json_encode($reply_keyboard)
        ]);
    }

  
    if ($text == 'Ob havo') {
        $weather_info = $weather->getWeatherData();

        if (isset($weather_info['cod']) && $weather_info['cod'] == 200) {
            $temperature = $weather_info['main']['temp'] - 273.15;
            $description = $weather_info['weather'][0]['description'];
            $humidity = $weather_info['main']['humidity'];
            $wind_speed = $weather_info['wind']['speed'];

            $weather_text = "Toshkent Ob-havo:\n";
            $weather_text .= "Harorat: " . round($temperature, 1) . "°C\n";
            $weather_text .= "Holati: " . ucfirst($description) . "\n";
            $weather_text .= "Namlik: " . $humidity . "%\n";
            $weather_text .= "Shamol tezligi: " . $wind_speed . " m/s\n";

            $bot->makeRequest('sendMessage', [
                'chat_id' => $chatId,
                'text' => $weather_text
            ]);
        } else {
            $bot->makeRequest('sendMessage', [
                'chat_id' => $chatId,
                'text' => "Ob-havo ma'lumotlarini olishda xatolik yuz berdi. Keyinroq qayta urinib ko'ring."
            ]);
        }
    }

    if ($text == 'Valyuta') {
        $currencies = $currency->getCurrencies();
        $currency_list = "Valyuta kurslari:\n";

        foreach ($currencies as $currency => $rate) {
            $currency_list .= $currency . ": " . $rate . "\n";
        }

        $bot->makeRequest('sendMessage', [
            'chat_id' => $chatId,
            'text' => $currency_list
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
