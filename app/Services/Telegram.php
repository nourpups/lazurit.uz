<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Telegram
{
    const GROUP_CHAT_ID = -1001919893949;
    const URL = 'https://api.telegram.org/';
    const TOKEN = 'bot6204566622:AAFwU-THVlA-_DzQkAsPR6IyHaSVAk02F6s';

    public static function sendMessageWithSingleInlineLinkButton($message, $button_text, $url)
    {
        $button = [
            'inline_keyboard' => [
                [
                    [
                        'text' => $button_text,
                        'url' => $url
                    ]
                ]
            ]
        ];
        $test = Http::post('https://api.telegram.org/bot6204566622:AAFwU-THVlA-_DzQkAsPR6IyHaSVAk02F6s/sendMessage', [
            'chat_id' => self::GROUP_CHAT_ID,
            'text' => $message,
            'reply_markup' => json_encode($button),
            'parse_mode' => 'html',
        ]);
    }
}