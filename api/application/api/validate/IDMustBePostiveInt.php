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

    protected function isPositiveInteger($value,$rule="",$data="",$field="")
    {
        if(is_numeric($value) && is_int($value + 0) && ($value + 0)>0){
            return true;
        }else{
            return false;
        }
    }
}