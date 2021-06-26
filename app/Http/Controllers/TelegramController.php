<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram;

class TelegramController extends Controller
{
    public function index()
    {
        $message = Telegram::getWebhookUpdates()->getMessage();
        if($message->getText() == '/inicio'){
           Telegram::sendMessage([
                   'chat_id' => "-512419342",
                   'parse_mode' => 'HTML',
                   'text' => "Hola"
               ])
        }
        /*$updates = Telegram::getWebhookUpdates();
        //dd($updates);
        $chanelId = $updates[0]['message']['chat']['id'];
        $text = 'Enviaste un mensaje.';

        Telegram::sendMessage([
            'chat_id' => "-512419342",
            'parse_mode' => 'HTML',
            'text' => $text
        ]);*/
    }

    public function updatedActivity()
    {
        $activity = Telegram::getWebhookUpdates();

        dd($activity);
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
