<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/10 0010
 * Time: 下午 10:41
 */

namespace app\lib\exception;
use app\lib\exception\BaseException;


class WechatException extends BaseException
{
     public $code = 400;
     public $msg = '微信服务器接口调用失败';
     public $errorCode = 999;
}