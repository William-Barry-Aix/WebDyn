<?php
require_once(__DIR__ . '/libs/autoload.php');
require_once(__DIR__ . '/controller/autoload.php');
spl_autoload_register(array('Bootstrap', 'autoload'));
spl_autoload_register(array('BootstrapApp', 'autoload'));

Monframework\App\Url::init();
