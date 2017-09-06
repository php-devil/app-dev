<?php
/**
 * @link http://www.php-devil.ru/
 * @copyright Copyright (c) 2017 Web Wizardry
 * @license http://www.php-devil.ru/license/
 */

namespace app\controllers;
use app\components\DefaultFrontendController;
use PhpDevil\web\errors\HttpException;

class ErrorController extends DefaultFrontendController
{
    public function handleException(HttpException $ex)
    {
        echo '<h1>' . $ex->getCode() . '</h1><p>' . $ex->getMessage() . '</p>';
    }
}