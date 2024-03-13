<?php

require_once './vendor/autoload.php';

$site = 'sbs.local';

$client = new GuzzleHttp\Client();

$restUrl = '/wp-json/finixio-developer-helper/create-page';

$template_file = __DIR__ . '/files/html/home-page.html';

$res = $client->request( 'POST', $site . $restUrl, [
	'form_params' => [
		'is_home_page'  => 'true',
		'page_template' => 'template-home.blade.php',
		'page_title'    => 'This Site Home Page',
		'page_content'  => file_get_contents( $template_file ),
	]
] );

$body = $res->getBody()->getContents();
$body = json_decode( $body );
echo $site . ' ' . $body->success;
if ( ! $body->success ) {
	echo ' ' . - $body->message;
}
echo PHP_EOL;
echo PHP_EOL;

