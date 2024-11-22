<?php

require 'vendor/autoload.php';
//require __DIR__ . '/../vendor/autoload.php';
use GuzzleHttp\Client;

class Currency {
    const CURRENCY_API_URL = "https://cbu.uz/uz/arkhiv-kursov-valyut/json/";
    public array $currencies =[];
    public $client;

    public function __construct(){
        $this->client = new Client([
            'base_uri' => self::CURRENCY_API_URL,
            'timeout'  => 2.0,
        ]);
       $request = $this->client->request('GET');
        $this->currencies = json_decode($request->getBody()->getContents());
    }

    public function getCurrencies() {
        $separated_data = [];
        $currencies_info = $this->currencies;
        foreach ($currencies_info as $currency) {
            $separated_data[$currency->Ccy] = $currency-> Rate;
        }
        return $separated_data;
    }

    public function exchange($value, $currency_name = 'USD') {
       
        echo ceil($value /$this->getCurrencies()[$currency_name]) . ' ' . $currency_name;
        
    }
  


}