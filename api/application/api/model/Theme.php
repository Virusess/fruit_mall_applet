<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/10 0010
 * Time: 下午 10:27
 */

namespace app\api\model;

use app\api\model\Base;

class Theme extends Base
{
    protected $hidden = ["topic_img_id","head_img_id","update_time","delete_time"];
    //定义与image关系(一对一)
        public function topicImg()
        {
            return $this->belongsTo('Image','topic_img_id','id');
        }

        public function headImg()
        {
            return $this->belongsTo('Image','head_img_id','id');
        }

}