<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/10 0010
 * Time: 下午 10:00
 */

namespace app\api\validate;
use app\api\validate\BaseValidate;


class IDCollection extends BaseValidate
{
    protected $rule = ['ids'=>'require|checkIDs'];
    protected $message = [
        "ids"=>'ids参数必须是以逗号分割的多个正整数'
    ];

    protected function checkIDs($value,$rule="",$data="",$field="")
    {
        $values = explode(',',$value);
        if(empty($values)){
            return false;
        }
        foreach ($values as $id){
            if(!$this->isPositiveInteger($id)){
                return false;
            }
        }

        return true;
    }
}