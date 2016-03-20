<?php

require __DIR__ . '/vendor/autoload.php';

use App\Classes\TimeUpMessage as TimeUp;
use Dotenv\Dotenv;
use Maknz\Slack\Client as Slack;

date_default_timezone_set('Asia/Tokyo');

/**
 * Environment
 */

$dotenv = new Dotenv(__DIR__);
$dotenv->load();

$end      = getenv('TODO_END_TIME');
$endpoint = getenv('SLACK_ENDPOINT');
$username = getenv('SLACK_USERNAME');
$channel  = getenv('SLACK_CHANNEL');

/**
 * Message
 */
$timeUp = new TimeUp($end);
$message = $timeUp->message();

/**
 * Slack
 */
$settings = [
    'username' => $username,
    'channel'  => $channel
];

$slack = new Slack($endpoint, $settings);
$slack->send($message);
