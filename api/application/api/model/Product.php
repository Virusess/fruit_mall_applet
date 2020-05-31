<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/10 0010
 * Time: 下午 10:27
 */

namespace app\api\model;

use app\api\model\Base;

class Product extends Base
{

    protected $hidden = ['delete_time','main_img_id','pivot','from','category_id','create_time','update_time'];


    /*定义与product_image关系(一对多)*/
    public function imgs()
    {
        return $this->hasMany('ProductImage','product_id','id');
    }

    /*定义与product_property关系(一对多)*/
    public function properties()
    {
         return $this->hasMany('ProductProperty','product_id','id');
    }

    //调用Base模型的图片读取器
    public function getMainImgUrlAttr($value,$data)
    {
        return $this->prefixImgUrl($value,$data);
    }


    /*
     *
     * @function getRecent
     * @http GET
     * @count 获取数量
     * return products json
     * */

     public static function getMostRecent($count)
     {
         $products = self::limit($count)->order('create_time desc')->select();
         return $products;
     }


    /*
    *
    * @function getAllInCategory
    * @http GET
    * @categoryID 分类ID
    * return products json
    * */

    public static function getProductsByCategoryID($categoryID)
    {
        $products = self::where('category_id','=',$categoryID)->select();
        return $products;
    }


    /*
   *
   * @function getOne
   * @http GET
   * @id 产品ID
   * return product json
   * */

    public static function getProductDetail($id)
    {
        $product = self::with('imgs,properties')->find($id);
        return $product;
    }


}