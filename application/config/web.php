<?php
/**
 * @link http://www.php-devil.ru/
 * @copyright Copyright (c) 2017 Web Wizardry
 * @license http://www.php-devil.ru/license/
 */

$config = require __DIR__ . '/application.php';

/**
 * Фронт-контроллер веб-прилодения.
 * Экземпляр будет создан методом Devil::instantiate() во входном скрипте.
 * @var \PhpDevil\web\Application
 */
$config['class'] = \PhpDevil\web\Application::className();

return $config;