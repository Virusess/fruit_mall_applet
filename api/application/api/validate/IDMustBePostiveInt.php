<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/10 0010
 * Time: 下午 10:00
 */

namespace app\api\validate;
use app\api\validate\BaseValidate;


class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = ['id'=>'require|isPositiveInteger'];
    protected $message = [
        'id'=>'id必须为正整数'
    ];
}