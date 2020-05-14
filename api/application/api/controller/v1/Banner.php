<?php
namespace app\api\controller\v1;
use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;

class Banner
{
    /*
     * 获取轮播图(首页)
     * @url /banner/:id
     * @http GET
     * @id banner的id
     * */
   public function getBanner($id)
   {
       (new IDMustBePostiveInt())->goCheck();
       $banner = BannerModel::getBannerByID($id);
       if(!$banner){
           throw new BannerMissException();
       }
       return $banner;



   }
}
