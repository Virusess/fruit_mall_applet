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


class ProductImage extends Base
{
     protected  $hidden = ['img_id','delete_time','product_id'];

     /*定义与Image表的关系(一对一)*/
     public function imgUrl()
     {
         return $this->belongsTo('Image','img_id','id');
     }
}