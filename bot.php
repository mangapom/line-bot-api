<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '0a5f9ac164dda79c16a25d67e17b4c95';
$access_token  = 'Nrs44yTOY6gM/Q/j+K8/I7I8oiN2jh6oe7RBAA7r/3DjkFC2RG0rPmXAR8IsG6Yun1mrp4jZ/6ulCiauhGjdeOnCBT3NcfA1KepVIkmzYKD+YO+FvQLp+IGMKfT+Xf6oDbIQtbqHQ0vQbqJhBKX54gdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
