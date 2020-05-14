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


class Image extends Base
{
    protected $hidden = ['id','from','update_time','delete_time'];

       /*
        * 调用父类prefixImgUrl
        * @return  $finalUrl 不拼接路径时为网络图片，拼接路径时为加载本地图片
        * */
    public function getUrlAttr($value,$data)
    {
         return $this->prefixImgUrl($value,$data);
    }

}