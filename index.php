<?php
require 'vendor/autoload.php';
$client = new Zelenin\Telegram\Bot\Api('732134924:AAGwBsUCeaxlEyHdkC_TpCIG-XkCQwI69eU'); // Set your access token
$url = ''; // URL RSS feed
$update = json_decode(file_get_contents('php://input'));

try
    {
        $chatid = $update['message']['from']['id'];
        $text = $update['message']['text'];
        sendMessage($chatid,"ciao");
    }
    catch(\Zelenin\Telegram\Bot\NotOkException $e)
    {

    //echo error message ot log it
    //echo $e->getMessage();

    }
function sendMessage($chatid, $text)
{
    $url = $web."/sendMessage?chat_id=$chatid&text=".urlencode($text);
    file_get_contents($url);
}
?>
