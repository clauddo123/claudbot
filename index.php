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
		   'Come faccio senza di te','Non lasciarmi :(','I need you so much',
		   'send nudes', 'beatrice si tropp sfaccimm bell marò', 't vogl ca cu me');
    $foto = array("https://www.miciogatto.it/new/wp-content/uploads/2015/10/image2-1-1030x801.jpeg",
                  "https://www.quotidianodipuglia.it/photos/HIGH/10/24/3981024_1006_gattino.jpg",
                  "https://t1.ea.ltmcdn.com/it/images/1/6/0/img_come_aiutare_un_gattino_a_defecare_1061_orig.jpg",
                  "https://cdn.thinglink.me/api/image/891410916787093506/1240/10/scaletowidth",
                  "https://www.cremazioneanimali.cloud/wp-content/uploads/2019/09/gattino-occhi-blu-steso.jpg",
                  "https://www.quotidianodipuglia.it/photos/MED/53/84/4135384_1329_9c1b9b08ed_5743940_med.jpg", 
                  "https://www.adnkronos.com/rf/image_size_400x300/Pub/AdnKronos/Assets/Immagini/gattino.png",
                  "https://i1.wp.com/liguriaoggi.it/wp-content/uploads/2019/11/gattino.jpg?resize=300%2C200&ssl=1",
                  "https://www.amicimici.com/wp-content/uploads/2016/05/video-di-gattini-giocherelloni-e.jpg",
                  "https://besthqwallpapers.com/Uploads/9-1-2019/77006/thumb2-ginger-kitten-small-cute-animal-pet-cats-cute-kittens.jpg"  
                );
    $frasifoto = array('miao','musetto','coccoline','uwu',':('); 
    
          switch($update->message->text)
          {
            case "/start":
                $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
    		        'chat_id' => $update->message->chat->id,
                    'text' => "Ogni volta che dormo o per qualsiasi motivo non posso risponderti, scrivi qui."
                ]);
            break;
           
            case "/love":
                $numfrase = rand(0,12);    
			    $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
				    'chat_id' => $update->message->chat->id,
				    'text' => "$frasi[$numfrase]"
                ]);  
            break;

            case "amo noi":
                $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
    		        'chat_id' => $update->message->chat->id,
    		        'text' => "amo noi"
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

            case "no io":
                $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
    		        'chat_id' => $update->message->chat->id,
    		        'text' => "no io stronza"
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

            case "mi manchi":
                $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
    		        'chat_id' => $update->message->chat->id,
    		        'text' => "anche tu amore"
                ]);
            break;

            case "sei mio":
                $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
    		        'chat_id' => $update->message->chat->id,
    		        'text' => "solo tuo babe"
                ]);
            break;

            case "svegliati":
                $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
    		        'chat_id' => $update->message->chat->id,
    		        'text' => "nun rompr o cazz amo"
                ]);
            break;

            case "amo mi ha scritto uno":
                $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
    		        'chat_id' => $update->message->chat->id,
    		        'text' => "rispondigli e ti sparo in testa"
                ]);
            break;

            case "che fai":
                $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
    		        'chat_id' => $update->message->chat->id,
    		        'text' => "dormo e ti sogno"
                ]);
            break;

            case "down":
                $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
    		        'chat_id' => $update->message->chat->id,
    		        'text' => "t spacc"
                ]);
            break;

            case "che palle":
                $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
    		        'chat_id' => $update->message->chat->id,
    		        'text' => "stai zitta hai anche il coraggio di lamentarti"
                ]);
            break;

            case "claudio":
                $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
    		        'chat_id' => $update->message->chat->id,
    		        'text' => "non è come sembra amo"
                ]);
            break;

            case "cucciolo":
                $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
    		        'chat_id' => $update->message->chat->id,
    		        'text' => "cucciolina :("
                ]);
            break;

            case "sei autistico":
                $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
    		        'chat_id' => $update->message->chat->id,
    		        'text' => "maro ti uccido"
                ]);
            break;
            

            case "ti voglio":
                $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
    		        'chat_id' => $update->message->chat->id,
    		        'text' => "anch'io stupidina"
                ]);
            break;

            case "ti penso":
                $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendMessage
                ([
    		        'chat_id' => $update->message->chat->id,
    		        'text' => "ti sto pensando anch'io baby ♥"
                ]);
            break;

            case "/domanda":
                $risposte = array('si','no'); 
                $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
                $response = $client->sendPoll
            ([
                'chat_id'=> $update->message->chat->id,
                'question'=>"Domanda Test",
                'options' => json_encode($risposte)
            ]);
            break;

            case "/foto":
                $num = sizeof($foto);
		        $numfrase = rand(0,$num-1);
                $numfrase2 = rand(0,4);
                $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'upload_photo']);
                $response = $client->sendPhoto
                ([
                
                    'chat_id' => $update->message->chat->id,
                    'photo' => "$foto[$numfrase]",
                    'caption' => "$frasifoto[$numfrase2]"
                    ]);
            break;
          }
}  catch (\Zelenin\Telegram\Bot\NotOkException $e) {

    //echo error message ot log it
    //echo $e->getMessage();

}
?>
