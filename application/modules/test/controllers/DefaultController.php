<?php
/**
 * @link http://www.php-devil.ru/
 * @copyright Copyright (c) 2017 Web Wizardry
 * @license http://www.php-devil.ru/license/
 */

namespace app\modules\test\controllers;
use app\components\DefaultFrontendController;

class DefaultController extends DefaultFrontendController
{
    public function actionVersion()
    {
        echo 'verion action of ' . __CLASS__;
    }
}