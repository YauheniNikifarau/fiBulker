<?php

require_once './vendor/autoload.php';

$site = 'sbs.local';

$client = new GuzzleHttp\Client();

$restUrl = '/wp-json/finixio-developer-helper/create-how-to';

$images_folder = __DIR__ . '/files/images/how-to/';

$res = $client->request( 'POST', $site . $restUrl, [
	'multipart' => [
		[
			'name'     => 'image',
			'contents' => file_get_contents( $images_folder . 'how-to-image.jpg' ),
			'filename' => 'how-to-image.jpg',
		],
	],
] );

$body = $res->getBody()->getContents();
$body = json_decode( $body );
echo $site . ' ' . $body->success;
if ( ! $body->success ) {
	echo ' ' . - $body->message;
}
echo PHP_EOL;
echo PHP_EOL;
