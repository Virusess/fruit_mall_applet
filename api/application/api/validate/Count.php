<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/10 0010
 * Time: 下午 10:00
 */

namespace app\api\validate;
use app\api\validate\BaseValidate;


class Count extends BaseValidate
{
   protected $rule = [
       'count'=>'isPositiveInteger|between:1,15'
   ];
}