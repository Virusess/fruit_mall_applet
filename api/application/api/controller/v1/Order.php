<?php
namespace app\api\controller\v1;


use app\api\controller\Base;
use app\api\validate\OrderPlace;
use think\Controller;
use app\api\service\Token as TokenService;

class Order extends Base
{

    /*
     * 前置控制，检测相关权限
     * */
    protected $beforeActionList = [
        'checkExclusiveScope' =>['only'=>'placeOrder']
    ];


    public function placeOrder()
    {
        (new OrderPlace())->goCheck();
        $products = input("post.products/a"); //接收所有商品数据，以数组方式
        $uid = TokenService::getCurrentUid();
    }

}
