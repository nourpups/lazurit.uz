<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Telegram
{
//    const GROUP_CHAT_ID = -1001919893949;
    const GROUP_CHAT_ID = 433320439;
    const TOKEN = 'bot6204566622:AAFwU-THVlA-_DzQkAsPR6IyHaSVAk02F6s';
    const URL = 'https://api.telegram.org/';

    public static function sendMessageInlineLinkButton($message, $buttonText, $url)
    {
        $button = [
            'inline_keyboard' => [
                [
                    [
                        'text' => $buttonText,
                        'url' => $url
                    ]
                ]
            ]
        ];
        $test = Http::post(self::URL.self::TOKEN.'/sendMessage', [
            'chat_id' => self::GROUP_CHAT_ID,
            'text' => $message,
            'reply_markup' => json_encode($button),
            'parse_mode' => 'html',
        ]);
    }
}