<?php

require 'vendor/autoload.php';
require "DB.php";

use GuzzleHttp\Client;

class Bot
{
    const API_URL = "https://api.telegram.org/bot";

    private $token = '7414113268:AAGHITMDBlzDFrQ4iC9B5i69Iv26dVvIhfE';
    public array $bots;
    public $client;

    public function makeRequest($method, $data)
    {
        $this->client = new Client([
            'base_uri' => self::API_URL . $this->token . '/',
            'timeout' => 2.0,
        ]);


        $response = $this->client->request('GET', $method, ['json' => $data]);
        return json_decode($response->getBody()->getContents(), true);

    }

    public function saveUser($user_id, $username): bool
    {
        $query = "INSERT INTO tg_users (user_id, username) VALUES (:user_id, :username)";
        $db = new DB();
        return $db->conn->prepare($query)->execute([
            ':user_id' => $user_id,
            ':username' => $username
        ]);
    }
}

//    public function makeRequest($method, $data=[]){
//        $ch=curl_init();
//        curl_setopt($ch,CURLOPT_URL,self::API_URL. $this->token . '/' . $method);
//        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
//        $response=curl_exec($ch);
//        curl_close($ch);
//        return ($response);
//    }




