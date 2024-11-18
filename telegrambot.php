<?php

require 'Currency.php';
require 'Bot.php';
$bot = new Bot();

$currency = new Currency();
$update= json_decode(file_get_contents('php://input'));
//$bot->makeRequest('sendMessage', [
//    'chat_id' => $update->message->chat->id,
//    'text' => $update->message->text,
//    ]);

    $text=$update->message->text;
    $from_id=$update->message->from->id;


if ($text=='/start'){
    $response = $bot->makeRequest('sendMessage', [
        'chat_id' => $from_id,
        'text' => "Hello World! <a href='https://core.telegram.org/bots/api#message'>dkvnknv</a>",
        'parse_mode' => 'html'
    ]);


    if (!$response->ok){
        $bot->makeRequest('sendMessage', [
            'chat_id' => $from_id,
            'text' => json_decode($response)
        ]);
    }
}
    if ($text=='/currency') {
    $currencies= $currency->getCurrencies();

    $currency_list="";
    foreach ($currencies as $currency=>$rate) {
        $currency_list .= $currency . ": " . $rate . "\n";

    }

    $bot->makeRequest('sendMessage', [
        'chat_id' => $from_id,
        'text' => $currency_list,

    ]);

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
