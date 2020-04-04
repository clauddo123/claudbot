<?php
$token = "1110097195:AAH7k0k1yvZUNCM_PXrXfT7-wpmaUvukpoM";
$website = "https://api.telegram.org/bot".$token;
$update = file_get_contents('php://input');
$update = json_decode($update,TRUE);

$chatid = $update['message']['from']['id'];
$text = $update['message']['text'];

sendMessage($chatid, "ciao");

function sendMessage($chatid, $text)
{
    $url = $GLOBALS[website]."/sendMessage?chat_id=$chatid&text=".urlencode($text);
    file_get_contents($url);
}
?>
