<?php

/*
 by: @iskkk
ch: @h4ck3riraq
صير فرخ وغير الحقوق
*/

ob_start();

define('API_KEY','توكن البوت');

echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=2016412632:AAEqLVwWmavnk4IKpEOr2ccjlhO-NI30tds" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
            function bot($method,$datas=[]){
    $rembo = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$rembo";
        $iskkk = file_get_contents($url);
        return json_decode($iskkk);
}
/*
 by: @P_7_4
ch: @TSU_00
صير فرخ وغير الحقوق
*/
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
/*
 by: @P_7_4
ch: @TSU_00
صير فرخ وغير الحقوق
*/
if($text =='/start'){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"اهلا بك عزيزي ❤
انا بوت تفليش الكروبات اضفني لاي كروب وارسل به /tsh", 
]); 
} 


if($text =="/tsh"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"😈جاي تفليش اجهزة اعضاء الكروب✅", 
]); 
} 