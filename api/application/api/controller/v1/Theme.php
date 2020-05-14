<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/14 0014
 * Time: 下午 11:03
 */

namespace app\api\controller\v1;


use app\api\validate\IDCollection;
use app\api\model\Theme as ThemeModel;
use app\lib\exception\ThemeException;

class Theme
{
    /*
    * 获取主题(首页)
    * @url /theme
    * @http GET
    * @ids 主题id
    * */
    public function getSimpleList($ids='')
    {
        (new IDCollection())->goCheck();
        $ids = explode(',',$ids);
        $theme = ThemeModel::with("topicImg,headImg")->select($ids);
        if(!$theme){
              throw new ThemeException();
        }

        return $theme;

    }
}