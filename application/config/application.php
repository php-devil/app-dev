<?php
/**
 * @link http://www.php-devil.ru/
 * @copyright Copyright (c) 2017 Web Wizardry
 * @license http://www.php-devil.ru/license/
 *
 * Главный конфигурационный файл приложения
 */

return [
    'components' => [
        'db' => [
            'dsn'      => 'mysql:host=localhost;dbname=dev_phpdevil_app',
            'user'     => 'root',
            'password' => '',
        ],
    ],

    'modules' => [
        'test' => [
            'class' => \app\modules\test\TestModule::className(),
        ],
    ]
];