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

/**
 * Маршрутизация внетри приложения.
 */
$config['components']['router'] = [
    /**
     * Массив ключ=>значение, где ключом является начало URL адреса, начиная с базового,
     * значениями - массив соответствий маршрута действию или объекту
     *
     * url c завершающей * - совпадение нечала адреса
     * url без завершающей * - полное совпадение
     */
    'routes' => [
        '/' => ['default-page', 'index-page'],
        '/test1' => ['test', 'default', 'version'],
    ],

    /**
     * URL, на которых роутинг перелается роутеру модуля, если вхождениеи данного адреса
     * не определено в конфигураторе маршрутов
     */
    'modules' => [
        'test' => '/test-module',
    ],

    /**
     * Разрешить несмонтированные в маршруты действия по идентификаторам
     * модуль/контроллер/действие
     */
    'allowUnmounted' => false,
];

return $config;