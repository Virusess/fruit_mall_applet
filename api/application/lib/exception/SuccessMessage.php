<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/10 0010
 * Time: 下午 10:41
 */

namespace app\lib\exception;
use app\lib\exception\BaseException;


class SuccessMessage extends BaseException
{
     public $code = 201;
     public $msg = 'ok';
     public $errorCode = 0;
}