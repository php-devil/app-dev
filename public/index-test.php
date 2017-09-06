<?php
/**
 * @link http://www.php-devil.ru/
 * @copyright Copyright (c) 2017 Web Wizardry
 * @license http://www.php-devil.ru/license/
 *
 * Входной сарипт приложения для unit тестирования
 */

require_once dirname(__DIR__) . '/vendor/autoload.php';

$config = require dirname(__DIR__) . '/application/config/web.php';


$config['components']['request']['server'] = [
    'DOCUMENT_ROOT'   => str_replace('\\', '/', __DIR__),
    'SCRIPT_FILENAME' => str_replace('\\', '/', __FILE__),
    'REQUEST_URI'     => isset($emulateRequestUrl) ? $emulateRequestUrl : '/',
];

if (isset($emulateGet)) {
    $config['components']['request']['get'] = $emulateGet;
}

if (isset($emulatePost)) {
    $config['components']['request']['post'] = $emulatePost;
}

return \PhpDevil\Devil::instantiate($config);