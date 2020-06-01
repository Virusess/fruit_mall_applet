<?php

namespace app\api\model;
use think\Exception;
use app\api\model\Base;

class User extends Base
{

    //定义与user_address关系(一对一)
    public function address()
    {
        return $this->hasOne('UserAddress','user_id','id');
    }


    //根据openid获取用户
    public static function getByOpenID($openid)
    {
        $user = self::where('openid','=',$openid)->find();
        return $user;
    }

}