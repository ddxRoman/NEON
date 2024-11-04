<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TgBotController extends Controller
{
    public function send(Request $request){
$validatedData=$request->validate([
'name'=>'string',
'tel_number'=>'string',
'msg'=>'string'
]);
$text="<b>ИМЯ: </b>{$validatedData['name']}\n<b>Номер телефона: </b>{$validatedData['tel_number']}\n<b>Вопрос: </b>{$validatedData['msg']}";
            \Illuminate\Support\Facades\Http::post('https://api.telegram.org/bot6048362058:AAFv50Fltmm_0Ufa-GYzAga-poK1-niyxVo/sendMessage',
            ['chat_id'=>env('CHAT_ID'),
            'text'=> $text,
            'parse_mode'=>'html'
            ]);
           return redirect()->route("home.blade");
    }
}
