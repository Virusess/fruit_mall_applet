<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/27 0027
 * Time: 下午 11:05
 */

namespace app\api\service;


use app\lib\exception\WechatException;
use think\Exception;
use app\api\model\User as UserModel;

class UserToken
{

    protected $code;
    protected $wxAppID;
    protected $wxAppSecret;
    protected $wxLoginUrl;

    function __construct($code)
    {
        $this->code = $code;
        $this->wxAppID = config('wx.app_id');
        $this->wxAppSecret = config('app_secret');
        $this->wxLoginUrl = sprintf(config('wx.login_url'),$this->wxAppID,$this->wxAppSecret,$this->code);

    }


    public function get()
    {
        $result = curl_get($this->wxLoginUrl);
        $wxResult = json_decode($result,true);
        if(empty($wxResult)){
            throw new Exception('获取session_key及openID时发生异常，微信内部错误');
        }else{
            $loginFail = array_key_exists('errcode',$wxResult);
            if ($loginFail){
               $this->processLoginError($wxResult);
            }else{
                $this->grantToken($wxResult);
            }
        }
    }


    private function processLoginError($wxResult)
    {
        throw new WechatException([
            'msg'=>$wxResult['errmsg'],
            'errorCode'=>$wxResult['errcode']
        ]);
    }

    private function grantToken($wxResult)
    {
        $openid = $wxResult['openid'];
        $user = UserModel::getByOpenID($openid);
        if($user){
            $uid = $user->id;
        }else{
            $uid = $user->newUser($openid);
        }


    }


    private function newUser($openid)
    {
        $user = UserModel::create([
            'openid'=>$openid
        ]);
        return $user->id;
    }


}