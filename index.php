<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//require 'Currency.php';
//$currency=new Currency();
//
//$currencies=$currency->getCurrencies();
//
//require 'views/currency-converter.php';


$uri=parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require 'vendor/autoload.php';

 if ($uri=='/weather'){


      require "src/Weather_information.php";
      $weather=new WeatherInformation();
     $weatherData=$weather->getWeatherData();
    require 'views/weather.php';
 }elseif ($uri=='/currency'){
     require 'src/Currency.php';
     $currency  = new Currency();
     $currencies = $currency->getCurrencies();

    require 'views/currency-converter.php';

 } elseif($uri=='/telegram'){
     require 'app/telegrambot.php';
 }
 else{
  echo 404;
 }

