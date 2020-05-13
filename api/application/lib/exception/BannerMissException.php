<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/10 0010
 * Time: 下午 10:41
 */

namespace app\lib\exception;
use app\lib\exception\BaseException;


class BannerMissException extends BaseException
{
     public $code = 404;
     public $msg = '请求的Banner不存在';
     public $errorCode = 40000;
}