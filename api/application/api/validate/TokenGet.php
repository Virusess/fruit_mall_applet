<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/10 0010
 * Time: 下午 10:00
 */

namespace app\api\validate;
use app\api\validate\BaseValidate;


class TokenGet extends BaseValidate
{
    protected $rule = ['code'=>'require|isNotEmpty'];
    protected $message = [
        'code'=>'没有code还想获取token,你做梦吧'
    ];
}