<?php

require_once './vendor/autoload.php';

$site = 'sbs.local';

$client = new GuzzleHttp\Client();

$restUrl = '/wp-json/finixio-developer-helper/create-how-to';

$images_folder = __DIR__ . '/files/images/how-to/';

$images = [
	'how-to-1.png',
	'how-to-2.png',
	'how-to-3.png',
	'how-to-4.png',
	'how-to-5.png',
	'how-to-6.png',
];

$multipart_array = [];
$key             = 1;
foreach ( $images as $image ) {
	$multipart_array[] = [
		'name'     => 'image_' . $key,
		'contents' => file_get_contents( $images_folder . $image ),
		'filename' => $image,
	];
	$key ++;
}

$res = $client->request( 'POST', $site . $restUrl, [
	'multipart' => $multipart_array
] );

$body = $res->getBody()->getContents();
$body = json_decode( $body );
echo $site . ' ' . $body->success;
if ( ! $body->success ) {
	echo ' ' . - $body->message;
}
echo PHP_EOL;
echo PHP_EOL;
