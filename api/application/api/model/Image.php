<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/10 0010
 * Time: 下午 10:27
 */

namespace app\api\model;


use think\Exception;
use think\Model;

class Image extends Model
{
    protected $hidden = ['id','from','update_time','delete_time'];

}