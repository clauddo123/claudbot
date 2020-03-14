<?php

/*
* This file is part of GeeksWeb Bot (GWB).
*
* GeeksWeb Bot (GWB) is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License version 3
* as published by the Free Software Foundation.
* 
* GeeksWeb Bot (GWB) is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.  <http://www.gnu.org/licenses/>
*
* Author(s):
*
* © 2015-2018 Kasra Madadipouya <kasra@madadipouya.com>
*
*/
require 'vendor/autoload.php';

$client = new Zelenin\Telegram\Bot\Api('732134924:AAGwBsUCeaxlEyHdkC_TpCIG-XkCQwI69eU'); // Set your access token
$url = ''; // URL RSS feed
$update = json_decode(file_get_contents('php://input'));
$content = file_get_contents("php://input");


$message = isset($update['message']) ? $update['message'] : "";
$messageId = isset($message['message_id']) ? $message['message_id'] : "";
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
$date = isset($message['date']) ? $message['date'] : "";
$text = isset($message['text']) ? $message['text'] : "";
// pulisco il messaggio ricevuto togliendo eventuali spazi prima e dopo il testo
$text = trim($text);
// converto tutti i caratteri alfanumerici del messaggio in minuscolo
$text = strtolower($text);
// mi preparo a restitutire al chiamante la mia risposta che è un oggetto JSON
// imposto l'header della risposta
header("Content-Type: application/json");
// la mia risposta è un array JSON composto da chat_id, text, method
// chat_id mi consente di rispondere allo specifico utente che ha scritto al bot
// text è il testo della risposta
$parameters = array('chat_id' => $chatId, "text" => $text);
// method è il metodo per l'invio di un messaggio (cfr. API di Telegram)
$parameters["method"] = "sendMessage";
// converto e stampo l'array JSON sulla response
echo json_encode($parameters);
//your app

if($chatId=='910134974'){
try {
    $frasi = array('Beatrice Ti amo', 'Sei mia', 'Mi manchi', 'Ho voglia di te', 't romp a cap', 'sei bellissima','Nun fa a scem',
		   'Come faccio senza di te','Non lasciarmi :(','I need you so much', 'Sij na pret', 't chiavass maro',
		   'mandami i piedini', 'send nudes');
    if($update->message->text == '/start')
   {
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Ogni volta che dormo o per qualsiasi motivo non posso risponderti, scrivi \n /love"
    		]);

    }
    else if($update->message->text == '/love')
	 {
		$numfrase = rand(0,13);    
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
			$response = $client->sendMessage([
				'chat_id' => $update->message->chat->id,
				'text' => "$frasi[$numfrase]"
			 ]);
	}
 }
 catch (\Zelenin\Telegram\Bot\NotOkException $e) {

    //echo error message ot log it
    //echo $e->getMessage();

}
}
else exit;
