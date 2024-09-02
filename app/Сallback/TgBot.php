<?
namespace App\Callback;

class TgBot{
public function sendMessage($chat_id, $message){
\Illuminate\Support\Facades\Http::post('https://api.telegram.org/bot6048362058:AAFv50Fltmm_0Ufa-GYzAga-poK1-niyxVo/sendMessage',
['chat_id'=>$chat_id,
'text'=>$$message,
'parse_mode'=>'html'
]);
}
}
// 
?>