<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/10 0010
 * Time: 下午 10:27
 */

namespace app\api\model;


use think\Exception;
use app\api\model\Base;

class UserAddress extends Base
{
    protected $hidden = ['id','delete_time','user_id'];

}