<?php
namespace app\api\controller;
use app\api\service\Token as TokenService;
use think\Controller;

class Base extends Controller
{
    /*权限控制 >=16*/
    protected function checkPrimaryScope()
    {
        TokenService::needPrimaryScope();
    }

    /*权限控制 =16*/
    protected function checkExclusiveScope()
    {
        TokenService::needExclusiveScope();
    }
}
