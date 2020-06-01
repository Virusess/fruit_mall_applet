<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/30 0030
 * Time: 下午 3:00
 */

namespace app\api\service;


use app\lib\exception\TokenException;
use think\Cache;
use think\Exception;
use think\Request;

class Token
{

    /*
    * 生成32位数字的token
    * */
    public  static function generateToken()
    {
        $randChars = getRandChar(32);
        $timestamp = $_SERVER['REQUEST_TIME_FLOAT'];
        $salt = config('secure.token_salt');
        return md5($randChars.$timestamp.$salt);

    }

    /*
     * 获取到用户uid
     * */

    public static function getCurrentUid()
    {
        $uid = self::getCurrentTokenVar('uid');
        return $uid;
    }

    /*
     * 根据传递进来的键，获取缓存中的值
     * */
    public static function getCurrentTokenVar($key)
    {
        $token = Request::instance()->header('token');

        return $token;

        /*$vars = Cache::get($token);
        if(!$vars){
            throw new TokenException();
        }else{
            if(!is_array($vars)){
                $vars = json_decode($vars,true);
            }

            if(array_key_exists($key,$vars)){
                return $vars[$key];
            }else{
                throw new Exception('尝试获取的Token变量不存在');
            }
        }*/
    }




}