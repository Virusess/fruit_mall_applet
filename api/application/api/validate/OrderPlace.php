<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/10 0010
 * Time: 下午 10:00
 */

namespace app\api\validate;
use app\api\validate\BaseValidate;
use app\lib\exception\ParameterException;


class OrderPlace extends BaseValidate
{
    protected $rule = ['products'=>'checkProducts'];

    protected $singRule = [
        'product_id'=>'require|isPositiveInteger',
        'count'=>'require|isPositiveInteger',
    ];


    protected function checkProducts($values)
    {
        if(!is_array($values)){
            throw new ParameterException(['msg'=>'商品参数不正确']);
        }

        if(empty($values)){
            throw new ParameterException(['msg'=>'商品列表不能为空']);
        }

        foreach ($values as $value){
            $this->checkProduct($value);
        }
        return true;
    }

    private function checkProduct($value)
    {
        $validate = new BaseValidate($this->singRule);
        $result = $validate->check($value);
        if(!$result){
            throw new ParameterException(['msg'=>'商品列表参数错误']);
        }
    }
}