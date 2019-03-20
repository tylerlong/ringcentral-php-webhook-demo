<?php
require('vendor/autoload.php');

$rcsdk = new RingCentral\SDK\SDK(getenv('RINGCENTRAL_CLIENT_ID'),
                                 getenv('RINGCENTRAL_CLIENT_SECRET'),
      	                         getenv('RINGCENTRAL_SERVER_URL'));
$platform = $rcsdk->platform();
$platform->login( getenv('RINGCENTRAL_USERNAME'),
                  getenv('RINGCENTRAL_EXTENSION'),
                  getenv('RINGCENTRAL_PASSWORD'));
$r = $platform->post('/account/~/extension/~/sms', array(
    'from' => array('phoneNumber' => getenv('RINGCENTRAL_USERNAME')),
    'to' => array(
        array('phoneNumber' => getenv('RINGCENTRAL_RECEIVER')),
    ),
    'text' => 'Message content',
));

print("Message ID: " . $r->json()->id . "\n");
