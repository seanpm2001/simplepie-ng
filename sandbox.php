#! /usr/bin/env php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use Pimple\Container;
use SamBurns\Pimple3ContainerInterop\ServiceContainer;
use SimplePie\Configure;
use SimplePie\Enum\CharacterSet;
use SimplePie\Enum\Mime;
use SimplePie\Provider\QuickProvider;
use SimplePie\SimplePie;
use Skyzyx\UtilityPack\Types;

$container = new ServiceContainer();
$container->addConfig(new QuickProvider());
$configuration = new Configure($container);

$simplepie = new SimplePie($configuration);

// $client = new Client([
//     'timeout'  => 2.0,
// ]);

// $response = $client->get('https://github.com/skyzyx/signer/releases.atom');

$stream = Psr7\stream_for(file_get_contents(__DIR__ . '/releases.atom'));
$dom = $simplepie->parseXml($stream)->getDomDocument();