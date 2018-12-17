<?php
require_once(__DIR__ . '/autoload.php');
require_once(__DIR__ . '/libs/autoload.php');

spl_autoload_register(array('Bootstrap', 'autoload'));
spl_autoload_register(array('BootstrapLibs', 'autoload'));
Monframework\App\Url::init();

