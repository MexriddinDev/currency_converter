<?php

class Bot
{
    const API_URL = "https://api.telegram.org/bot";

    private $token ='7607236172:AAHRCNhl8_InwM26Dz0pIkBu3v3pkE8EEWY';

    public function makeRequest($method, $data=[]) {
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,self::API_URL. $this->token . '/' . $method);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        $response=curl_exec($ch);
        curl_close($ch);
        var_dump($response);
    }
}
$bot=new Bot();
$bot->makeRequest('sendMessage',[
    'chat_id'=>1184585040,
    'text'=>'Hello from Bot'
]);
$bot->makeRequest('sendVideo',[
    'chat_id'=>1184585040,
    'video'=>'https://www.w3schools.com/html/mov_bbb.mp4'
]);


