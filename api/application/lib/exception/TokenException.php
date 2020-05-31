<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/10 0010
 * Time: 下午 10:41
 */

namespace app\lib\exception;
use app\lib\exception\BaseException;


class TokenException extends BaseException
{
     public $code = 401;
     public $msg = 'Token已过期或无效Token';
     public $errorCode = 10001;
}