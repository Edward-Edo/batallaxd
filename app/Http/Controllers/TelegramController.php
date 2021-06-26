<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram;

class TelegramController extends Controller
{
    public function index()
    {
        // $updates = json_decode(Telegram::getWebhookUpdates());
        // //dd($updates);
        // $chanelId = $updates['message']['chat']['id'];
        $text = 'Enviaste un mensaje.';

        Telegram::sendMessage([
            'chat_id' => "-512419342",
            'parse_mode' => 'HTML',
            'text' => $text
        ]);
    }

    public function updatedActivity()
    {
        $activity = Telegram::getUpdates();

        dd($activity[0]['message']['chat']['id']);
    }

    public function pushMessage()
    {
        $name = 'Edward';
        $title = 'Lala';
        $date = date('d-m-y');
        $text = "<b>Registro completo:</b>:\n"
        . "<b>Respnsable: </b>\n"
        . "$name\n"
        . "<b>Pelicula: </b>\n"
        . "$title\n"
        . "<b>Fecha y Hora: </b>\n"
        . "$date";

        Telegram::sendMessage([
            'chat_id' => "-512419342",
            'parse_mode' => 'HTML',
            'text' => $text
        ]);
    }
}
