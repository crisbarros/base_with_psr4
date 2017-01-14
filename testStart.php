<?php

require_once 'psr4_autoloader.php';

// instantiate the loader
$loader = new Psr4Autoloader();
$loader->register();
$loader->addNamespace('WptWrapper', 'WptWrapper');

new \WptWrapper\Lib();
