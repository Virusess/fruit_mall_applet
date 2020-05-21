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

class Category extends Base
{

    protected $hidden = ['update_time','create_time','delete_time'];

    //定义与img关系(一对一)
    public function img()
    {
        return $this->belongsTo('Image','topic_img_id','id');
    }


}