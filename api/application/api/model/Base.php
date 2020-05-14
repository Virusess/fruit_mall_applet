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

class Base extends Model
{

    /*
        * 获取图片链接
        * @return  $finalUrl 不拼接路径时为网络图片，拼接路径时为加载本地图片
        * */
    public function prefixImgUrl($value,$data)
    {
        $finalUrl = $value;
        if($data['from'] == 1){
            $finalUrl = config('setting.img_prefix').$value;
        }
        return $finalUrl;
    }

}