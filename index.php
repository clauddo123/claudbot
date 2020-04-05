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

//your app

try {
    $frasi = array('Beatrice Ti amo', 'Sei mia', 'Mi manchi', 'Ho voglia di te', 't romp a cap', 'sei bellissima','Nun fa a scem',
		   'Come faccio senza di te','Non lasciarmi :(','I need you so much', 'Sij na pret', 't chiavass maro',
		   'mandami i piedini', 'send nudes', 'beatrice si tropp sfaccimm bell marò', 't vogl ca cu me', 'famm nu bucchin',
          '>//< can i fuck you 👉👈' );
          switch($update->message->text)
          {
            case "/start":
                $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
    		        'chat_id' => $update->message->chat->id,
    		        'text' => "Ogni volta che dormo o per qualsiasi motivo non posso risponderti, scrivi \n /love"
                ]);
            break;
            
          }
 
}  catch (\Zelenin\Telegram\Bot\NotOkException $e) {

    //echo error message ot log it
    //echo $e->getMessage();

}
?>
