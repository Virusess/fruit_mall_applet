<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/10 0010
 * Time: 下午 10:41
 */

namespace app\lib\exception;
use app\lib\exception\BaseException;


class ForbiddenException extends BaseException
{
     public $code = 403;
     public $msg = '权限不够';
     public $errorCode = 10001;
}