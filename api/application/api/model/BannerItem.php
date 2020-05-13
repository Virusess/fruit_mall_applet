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

class BannerItem extends Model
{
    protected $hidden = ['delete_time','update_time','id','img_id','banner_id'];

    //定义与banner_item关系(一对一)
     public function img(){
         return $this->belongsTo('Image','img_id','id');
     }

}