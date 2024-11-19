<?php

require "namaz.frontent.php";
 class Namaz
 {

     const NAMAZ_API = "https://api.aladhan.com/v1/timings/19-11-2024";

     public array $country=[];
     public function __construct()
     {
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, self::NAMAZ_API);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

         $output = curl_exec($ch);
         curl_close($ch);

         $this->country = json_decode($output);
     }

     public function getNamazDate(){
         $namazDate=[];
         $country_info=$this->country;

         foreach($country_info as $country){
             $namazDate[]=$country->data;

         }
         return $namazDate;



     }

 }
