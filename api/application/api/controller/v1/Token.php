<?php
namespace app\api\controller\v1;
use app\api\service\UserToken;
use app\api\validate\TokenGet;


class Token
{
    /*
     * 获取token(登录前)
     * @url /token/user
     * @http post
     * @code 小程序code码
     * */
   public function getToken($code = "")
   {

       (new TokenGet())->goCheck();
       $ut = new UserToken($code);
       $token = $ut->get();
       return $token;

       /*return ['token'=>$token];*/

   }
}
