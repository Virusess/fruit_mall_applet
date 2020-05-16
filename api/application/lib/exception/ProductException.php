<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/10 0010
 * Time: 下午 10:41
 */

namespace app\lib\exception;
use app\lib\exception\BaseException;


class ProductException extends BaseException
{
     public $code = 404;
     public $msg = '指定的商品不存在，请检查参数';
     public $errorCode = 20000;
}