<?php declare(strict_types=1);

use Curl\Curl;

require __DIR__.'/vendor/autoload.php';

$curl = new Curl();

$message = 'Hello';

$curl->get('https://secureapp.simsimi.com/v1/simsimi/talkset', [
    'uid' => '306320877',
    'av' => '6.9.5.1',
    'ak' => 'cS7nbNTWYV4wHOJA3rdfhtytk2c=',
    'session' => 'DVvvKBWbfDaH4jWADVP7jB1ZMmF7kZTk4RhBY4ZbqAVbsabYzb66TLax5xCymNx1UhaPtEavdNn43SgRqRDYTSA5',
    'cc' => 'VN',
    'tz' => 'Asia/Saigon',
    'os' => 'a',
    'lc' => 'vn',
    'message_sentence' => $message,
    'normalProb' => 2,
    'isFilter' => 0,
    'reqFilter' => 0,
]);

echo $curl->response->simsimi_talk_set->answers[0]->sentence;
