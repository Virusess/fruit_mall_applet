<?php
namespace app\api\controller\v1;
use app\api\validate\AddressNew;
use app\api\service\Token as TokenService;
use app\api\model\User as UserModel;
use app\lib\enum\ScopeEnum;
use app\lib\exception\ForbiddenException;
use app\lib\exception\SuccessMessage;
use app\lib\exception\TokenException;
use app\lib\exception\UserException;
use app\api\controller\Base;

class Address extends Base
{

    /*
     * 前置控制，检测相关权限
     * */
    protected $beforeActionList = [
        'checkPrimaryScope' =>['only'=>'createOrUpdateAddress']
    ];


    /*
     * 获取用户地址和更新地址(我的)
     * @url /address
     * @http POST
     * */
   public function createOrUpdateAddress()
   {
        $validate = new AddressNew();
        $validate->goCheck();
        $uid = TokenService::getCurrentUid();
        $user = UserModel::get($uid);
        if(!$user){
            throw new UserException();
        }

        $dataArray = $validate->getDataByRule(input('post.'));
        $userAddress = $user->address;
        if(!$userAddress){
            $user->address()->save($dataArray);
        }else{
            $user->address->save($dataArray);
        }

        return new SuccessMessage();

   }
}
