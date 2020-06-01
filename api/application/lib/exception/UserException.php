<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/10 0010
 * Time: 下午 10:41
 */

namespace app\lib\exception;
use app\lib\exception\BaseException;


class UserException extends BaseException
{
     public $code = 404;
     public $msg = '用户不存在';
     public $errorCode = 60000;
}