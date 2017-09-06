<?php
/**
 * @link http://www.php-devil.ru/
 * @copyright Copyright (c) 2017 Web Wizardry
 * @license http://www.php-devil.ru/license/
 */

namespace app\components;
use PhpDevil\base\BaseController;

/**
 * Class DefaultBackendController
 *
 * Общий предок для всех backend контроллеров приложения и модулей.
 * От данного контроллера наследуются все backend контроллеры.
 *
 * Сам контроллер должен наследовать расширяемый контроллер используемого backend приложения.
 *
 * @package app\components
 * @author Alexey Volkov <alex.phpdevil@gmail.com>
 */
class DefaultBackendController extends BaseController
{

}