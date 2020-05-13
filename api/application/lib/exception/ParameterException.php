<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/10 0010
 * Time: 下午 10:41
 */

namespace app\lib\exception;
use app\lib\exception\BaseException;


class ParameterException extends BaseException
{
     public $code = 400;
     public $msg = '参数错误';
     public $errorCode = 10000;
}