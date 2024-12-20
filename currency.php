<?php
class Currency {
    const CURRENCY_API_URL = "https://cbu.uz/uz/arkhiv-kursov-valyut/json/";
    public array $currencies =[];

    public function __construct(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::CURRENCY_API_URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);
        curl_close($ch);

        $this->currencies = json_decode($output);
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