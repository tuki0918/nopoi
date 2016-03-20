<?php

require_once './vendor/autoload.php';
require_once './N.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

date_default_timezone_set('Asia/Tokyo');

$limit    = getenv('TODO_TIME_LIMIT');
$endpoint = getenv('SLACK_ENDPOINT');
$username = getenv('SLACK_USERNAME');
$channel  = getenv('SLACK_CHANNEL'); // `#` required

/**
 * Message
 */
$n = new N($limit);
$message = $n->message();

/**
 * Slack
 */
$settings = [
    'username' => $username,
    'channel'  => $channel
];

$slack = new Maknz\Slack\Client($endpoint, $settings);
$slack->send($message);
