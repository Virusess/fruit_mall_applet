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

class Banner extends Model
{

    protected $hidden = ['delete_time','update_time'];

    //定义与banner_item关系(一对多)
    public function items()
    {
        return $this->hasMany('BannerItem','banner_id','id');
    }


    /*
     *
     * @function getBanner
     * @http GET
     * @id banner的id
     * return banner json
     * */
    public static function getBannerByID($id)
    {
        $banner = self::with(['items','items.img'])->find($id);
        return $banner;
    }
}