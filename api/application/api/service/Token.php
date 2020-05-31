<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/30 0030
 * Time: 下午 3:00
 */

namespace app\api\service;


class Token
{

    public  static function generateToken()
    {
        $randChars = getRandChar(32);
        $timestamp = $_SERVER['REQUEST_TIME_FLOAT'];
        $salt = config('secure.token_salt');
        return md5($randChars.$timestamp.$salt);

    }

}