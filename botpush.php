<?php



require "vendor/autoload.php";

$access_token = 'qttbhECG4XT+6621GFMphpNThaEowMaGVfkJWHPWBBSrJlaqh3rC8YQjz2YaP5hGAHj+pOPGNSrDJiliJPwMQgmPpBdZr54MZviZhctc/53nuG3XTvA4kMRGXEao2UNNLCFGLPMLanLc0deN990cVAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '72b1125399445c70d9fa85932fca7bff';

$pushID = 'U8d431a8e0c971674c6baafb7fb631ec2';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







