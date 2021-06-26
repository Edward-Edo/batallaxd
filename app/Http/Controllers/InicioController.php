<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    protected $token = "1749704343:AAGq-2wfQQJOFTfi4vSPlltwSsuRN5OVrrM";
    protected $website = "https://api.telegram.org/bot1749704343:AAGq-2wfQQJOFTfi4vSPlltwSsuRN5OVrrM";

    public function index()
    {
        dd("Bienvenido");
        /*try {
            $update = file_get_contents('php://input');
            $update = json_decode($update, TRUE);

            $chatId = $update["message"]["chat"]["id"];
            $chatType = $update["message"]["chat"]["type"];
            $message = $update["message"]["text"];

            $response = "Binvenido";
            $this->sendMessage($chatId, $response);
        } catch (\Exception $e) {
            return "Falló";
        }*/
    }

    public function sendMessage($chatId, $response)
    {
        $url = $this->website.'/sendMessage?chat_id='.$chatId.'&parse_mode=HTML&text='.urlencode($response);
        file_get_contents($url);
    }

    public function init_dragones()
    {
        return view('dragones.index');
    }
}
