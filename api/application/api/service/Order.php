<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/6/2 0002
 * Time: 下午 11:07
 */

namespace app\api\service;


class Order
{
    //客户下单数据
    protected $oProducts;

    //库存数据
    protected $products;

    //用户ID
    protected $uid;

    public function place($uid,$oProducts)
    {
        $this->oProducts = $oProducts;
        $this->uid = $uid;
    }

    private function getProdoctsByOrder($oProducts)
    {

    }


}