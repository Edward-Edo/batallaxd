<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram;

class TelegramController extends Controller
{
    public function index()
    {
        $text = 'Enviaste un mensaje.';

        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', '1447158631'),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);
    }

    public function updatedActivity()
    {
        $activity = Telegram::getUpdates();
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
            'chat_id' => env('TELEGRAM_CHANNEL_ID', '1447158631'),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);
    }
}
