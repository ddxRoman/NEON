<?
// $name = ['name'];
// $phone = ['tel_number'];
// $msg = ['msg'];
namespace App\Callback;
class TgBot{
public function sendMessage($chat_id, $msg){
\Illuminate\Support\Facades\Http::post('https://api.telegram.org/bot6048362058:AAFv50Fltmm_0Ufa-GYzAga-poK1-niyxVo/sendMessage',
['chat_id'=>$chat_id,
'text'=>$msg,
'parse_mode'=>'html'
]);
}
}
echo "TYT".$name."<br>".$msg."<br".$phone;

?>