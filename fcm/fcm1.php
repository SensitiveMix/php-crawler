<?php
/**
 * Created by PhpStorm.
 * User: sunNode
 * Date: 16/8/11
 * Time: 上午2:57
 */

use \Client;
use \Message;
use Recipient\Topic;
use \Notification;

$server_key = '_YOUR_SERVER_KEY_';
$client = new Client();
$client->setApiKey($server_key);
$client->injectGuzzleHttpClient(new \GuzzleHttp\Client());

$message = new Message();
$message->setPriority('high');
$message->addRecipient(new Topic('_YOUR_TOPIC_'));
$message
    ->setNotification(new Notification('some title', 'some body'))
    ->setData(['key' => 'value'])
;

$response = $client->send($message);
var_dump($response->getStatusCode());
var_dump($response->getBody()->getContents());