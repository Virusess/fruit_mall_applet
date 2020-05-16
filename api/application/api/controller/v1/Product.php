<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/14 0014
 * Time: 下午 11:03
 */

namespace app\api\controller\v1;

use app\api\validate\Count;
use app\api\model\Product as ProductModel;
use app\lib\exception\ProductException;


class Product
{
    /*
    * 获取最新商品(首页)
    * @url /product/recent
    * @http GET
    * @count 数量
    * */
    public function getRecent($count=15)
    {
        (new Count())->goCheck();
        $products =ProductModel::getMostRecent($count);
        if(!$products){
             throw new ProductException();
        }

        $collect = collection($products);
        $products = $collect->hidden(['summary']);
        return $products;

    }


}