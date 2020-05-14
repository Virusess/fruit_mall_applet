<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/10 0010
 * Time: 下午 10:07
 */

namespace app\api\validate;
use app\lib\exception\ParameterException;
use think\Exception;
use think\Request;
use think\Validate;



class BaseValidate extends Validate
{
    public function goCheck()
    {
        $request = Request::instance();
        $params  = $request->param();
        $result = $this->batch()->check($params);
        if (!$result){
            $e = new ParameterException([
                'msg'=>$this->error
            ]);
            throw $e;
        }else{
            return true;
        }
    }

    protected function isPositiveInteger($value,$rule="",$data="",$field="")
    {
        if(is_numeric($value) && is_int($value + 0) && ($value + 0)>0){
            return true;
        }else{
            return false;
        }
    }
}