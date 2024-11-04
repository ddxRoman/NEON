<?php

namespace App\Services;

use GuzzleHttp\Client;

class TelegramService
{
    protected $token;
    protected $chatId;
    protected $client;

    public function __construct()
    {
        $this->token = env('TELEGRAM_BOT_TOKEN', false);
        $this->chatId = env('TELEGRAM_CHAT_ID', false);
        //https://api.telegram.org/bot<Bot_token>/getUpdates

        if ($this->token && $this->chatId) {
            $this->client = new Client();
        }
    }

    public function sendMessage($message)
    {
        if (!$this->token || !$this->chatId) {
            return false;
        }

        $url = "https://api.telegram.org/bot{$this->token}/sendMessage";

        $response = $this->client->post($url, [
            'json' => [
                'chat_id' => $this->chatId,
                'text' => $message,
                'parse_mode' => 'HTML'
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}