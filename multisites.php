<?php

require_once './vendor/autoload.php';

$sites_array = [
	//'bedstecasinoudenrofus.com',
	'bestsportsbettingcalifornia.com',
	'bestsportsbettingcanada.ca',
	'bestsportsbettingflorida.com',
	'bestsportsbettingtexas.com',
	'bitcoincasinos.com',
	'bitcoinsportsbooks.com',
	'canadiansportsbooks.com',
	'casinoohne1eurolimit.com',
	//'casinoohne5sekundenregel.net',
	'casinoohneanmeldung.io',
	'casinoohnelimit.info',
	'casinoohnelizenz.app',
	'casinoohneoasis.app',
	'casinoohnesperrdatei.net',
	'casinoohneverifizierung.org',
	'casinosenligne.com',
	'casinosite.nl',
	'casinozonderlicentie.io',
	'fairbettingsites.co.uk',
	'fogadas.com',
	//'highrollershaven.com',
	'japanesebetting.com',
	//'kasyno-online-polskie.com',
	'legalsportsbooks.com',
	'neueonlinecasinos.io',
	//'neueonlinescasinos.io',
	'neuewettanbieter.app',
	'newjapanesecasinos.com',
	'newkoreancasinos.com',
	'nieuwcasinonederland.com',
	'online-casinoschweiz.ch',
	'parissportif.fr',
	'safebettingsites.com',
	'safebettingsitesmalaysia1.com',
	//'safebettingsitesindonesia.com',
	'sikrebettingsider.com',
	//'topcasinosites.eu',
	//'uudet-suomalaiset-nettikasinot.net',
	'uudetvedonlyontisivut.com',
	'wettanbieterbonus.de',
	'wettanbieteroesterreich.at',
	//'wettanbieterohnelugas.com',
	'wettanbieterohneoasis.org',
	'wettanbieterschweiz.ch',
	'wette.de',
	'xn--bstacasinoutansvensklicens-ghc.net',
	'xn--serisecasinoohnelizenz-xhc.com',
];

$multisites_array = [
	'https://bestsportsbettingcalifornia.com',
	'https://bestsportsbettingcanada.ca',
	'https://bestsportsbettingflorida.com',
	'https://bestsportsbettingtexas.com',
	'https://www.bitcoincasinos.com',
	'https://www.bitcoincasinos.com/ca',
	'https://www.bitcoincasinos.com/uk',
	'https://www.bitcoincasinos.com/au',
	'https://www.bitcoincasinos.com/ch',
	'https://www.bitcoincasinos.com/fr',
	'https://www.bitcoincasinos.com/be',
	'https://www.bitcoincasinos.com/es',
	'https://www.bitcoincasinos.com/ar',
	'https://www.bitcoincasinos.com/mx',
	'https://www.bitcoincasinos.com/it',
	'https://www.bitcoincasinos.com/de',
	'https://www.bitcoincasinos.com/nl',
	'https://www.bitcoincasinos.com/at',
	'https://www.bitcoincasinos.com/se',
	'https://www.bitcoincasinos.com/dk',
	'https://www.bitcoincasinos.com/no',
	'https://www.bitcoincasinos.com/fi',
	'https://www.bitcoincasinos.com/in',
	'https://www.bitcoincasinos.com/br',
	'https://www.bitcoincasinos.com/za',
	'https://www.bitcoincasinos.com/pt',
	'https://www.bitcoincasinos.com/kr',
	'https://www.bitcoincasinos.com/jp',
	'https://www.bitcoincasinos.com/ru',
	'https://www.bitcoincasinos.com/zh-cn',
	'https://www.bitcoincasinos.com/vn',
	'https://www.bitcoincasinos.com/th',
	'https://www.bitcoincasinos.com/my',
	'https://www.bitcoinsportsbooks.com',
	'https://www.bitcoinsportsbooks.com/ca',
	'https://www.bitcoinsportsbooks.com/uk',
	'https://www.bitcoinsportsbooks.com/au',
	'https://canadiansportsbooks.com',
	'https://casinoohne1eurolimit.com',
	'https://casinoohneanmeldung.io',
	'https://casinoohnelimit.info',
	'https://casinoohnelizenz.app',
	'https://casinoohneoasis.app',
	'https://casinoohnesperrdatei.net',
	'https://casinoohneverifizierung.org',
	'https://casinosenligne.com',
	'https://casinosenligne.com/be',
	'https://casinosenligne.com/fr',
	'https://casinosenligne.com/ch',
	'https://casinosenligne.com/en',
	'https://www.casinosite.nl',
	'https://casinozonderlicentie.io',
	'https://fogadas.com',
	'https://japanesebetting.com',
	'https://legalsportsbooks.com',
	'https://neueonlinecasinos.io',
	'https://neuewettanbieter.app',
	'https://newjapanesecasinos.com',
	'https://newkoreancasinos.com',
	'https://nieuwcasinonederland.com',
	'https://online-casinoschweiz.ch',
	'https://parissportif.fr',
	'https://www.safebettingsites.com',
	'https://www.safebettingsites.com/in',
	'https://www.safebettingsites.com/au',
	'https://www.safebettingsites.com/ke',
	'https://www.safebettingsites.com/gh',
	'https://www.safebettingsites.com/ng',
	'https://www.safebettingsites.com/ca',
	'https://www.safebettingsites.com/nz',
	'https://www.safebettingsites.com/sg',
	'https://www.safebettingsites.com/za',
	'https://www.safebettingsites.com/ie',
	'https://www.safebettingsites.com/us',
	'https://www.safebettingsites.com/my',
	'https://www.safebettingsites.com/vn',
	'https://www.safebettingsites.com/th',
	'https://www.safebettingsites.com/no',
	'https://www.safebettingsites.com/nl',
	'https://www.safebettingsites.com/fi',
	'https://www.safebettingsites.com/id',
	'https://www.safebettingsites.com/br',
	'https://www.safebettingsites.com/ae',
	'https://www.safebettingsites.com/kr',
	'https://www.safebettingsites.com/es',
	'https://www.safebettingsites.com/pl',
	'https://www.safebettingsites.com/jp',
	'https://www.safebettingsites.com/be',
	'https://www.safebettingsites.com/pk',
	'https://www.safebettingsites.com/ar',
	'https://www.safebettingsites.com/kw',
	'https://www.safebettingsites.com/de',
	'https://www.safebettingsites.com/ph',
	'https://www.safebettingsites.com/hk',
	'https://www.safebettingsites.com/tw',
	'https://www.safebettingsitesmalaysia1.com',
	'https://sikrebettingsider.com',
	'https://uudetvedonlyontisivut.com',
	'https://wettanbieterbonus.de',
	'https://wettanbieterbonus.de/lincolnredimpsfc',
	'https://wettanbieteroesterreich.at',
	'https://wettanbieterohneoasis.org',
	'https://wettanbieterschweiz.ch',
	'https://www.wette.de',
	'https://xn--bstacasinoutansvensklicens-ghc.net',
	'https://xn--serisecasinoohnelizenz-xhc.com'
];

$multisites = [];

$client = new GuzzleHttp\Client();

foreach ( $sites_array as $site ) {

	$restUrl = '/wp-json/finixio-qa-api/v1/multisites-info';

	$urlData    = parse_url( $site );
	$date       = ( new DateTime() )->format( 'Ymd' );
	$key        = ( $urlData['host'] ?? '' ) . ( $urlData['path'] ?: '' ) . $date;
	$encodedKey = base64_encode( $key );

	$restUrl .= '?key=' . $encodedKey;

	$res = $client->request( 'GET', 'www.' . trim( $site, '/' ) . $restUrl, );

	$body = $res->getBody()->getContents();
	$body = json_decode( $body );
	foreach ( $body as $multisite ) {
		$multisites[] = $multisite->url;
	}
}

$multisites = array_map( function ( $item ) {
	return '\'' . $item . '\'';
}, $multisites );

echo '[' . implode( ', ', $multisites ) . ']';

