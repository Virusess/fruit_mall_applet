<?php

namespace app\api\model;
use think\Exception;
use app\api\model\Base;

class User extends Base
{

    //根据openid获取用户
    public static function getByOpenID($openid)
    {
        $user = self::where('openid','=',$openid)->find();
        return $user;
    }

}