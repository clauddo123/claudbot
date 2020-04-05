
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
		   'Come faccio senza di te','Non lasciarmi :(','I need you so much', 't chiavass maro',
		    'send nudes', 'beatrice si tropp sfaccimm bell marò', 't vogl ca cu me' );
    $foto = array("https://www.miciogatto.it/new/wp-content/uploads/2015/10/image2-1-1030x801.jpeg",
                  "https://www.quotidianodipuglia.it/photos/HIGH/10/24/3981024_1006_gattino.jpg",
                  "https://t1.ea.ltmcdn.com/it/images/1/6/0/img_come_aiutare_un_gattino_a_defecare_1061_orig.jpg",
                  "https://cdn.thinglink.me/api/image/891410916787093506/1240/10/scaletowidth",
                  "https://www.cremazioneanimali.cloud/wp-content/uploads/2019/09/gattino-occhi-blu-steso.jpg",   
                );
    $frasifoto = array('miao','musetto','coccoline','uwu',':(');            
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
           
            case "/love":
                $numfrase = rand(0,13);    
			    $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
				    'chat_id' => $update->message->chat->id,
				    'text' => "$frasi[$numfrase]"
                ]);  
            break;
            
            case "mi manchi":
			    $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
				    'chat_id' => $update->message->chat->id,
				    'text' => "anche tu amore"
                ]);  
            break;

            case "ti amo":
			    $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
				    'chat_id' => $update->message->chat->id,
				    'text' => "io di più"
                ]);  
            break;

            case "sei mio":
			    $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
				    'chat_id' => $update->message->chat->id,
				    'text' => "solo tuo cucc"
                ]);  
            break;

            case "svegliati":
			    $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
				    'chat_id' => $update->message->chat->id,
				    'text' => "sto durmenn nun rompr o cazz"
                ]);  
            break;

            case "down":
			    $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
				    'chat_id' => $update->message->chat->id,
				    'text' => "semp tu"
                ]);  
            break;

            case "uff":
			    $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
				    'chat_id' => $update->message->chat->id,
				    'text' => "cr e amo"
                ]);  
            break;

            case "no tu":
			    $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
				    'chat_id' => $update->message->chat->id,
				    'text' => "no tu"
                ]);  
            break;

            case "no io":
			    $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
				    'chat_id' => $update->message->chat->id,
				    'text' => "no io"
                ]);  
            break;

            case "/foto":
                $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'upload_photo']);
                $response = $client->sendPhoto
                ([
                    $numfrase = rand(0,4);
                    $numfrase2 = rand(0,4);
                    'chat_id' => $update->message->chat->id,
                    'photo' => $foto[$numfrase],
                    'caption' => $foto[$numfrase2]
                    ]);
            break;
          }

 
}  catch (\Zelenin\Telegram\Bot\NotOkException $e) {

    //echo error message ot log it
    //echo $e->getMessage();

}
?>
