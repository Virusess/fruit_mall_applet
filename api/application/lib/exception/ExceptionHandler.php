<?php
/**
 * Created by PhpStorm.
 * User: armin
 * Date: 2020/5/10 0010
 * Time: 下午 10:37
 */

namespace app\lib\exception;

use Exception;
use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandler extends Handle
{
     private $code;
     private $msg;
     private $errorCode;

     public function render(\Exception $e)
     {
         if($e instanceof BaseException){
             //用户异常
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;

         }else{
             if(config('app_debug')){
                 return parent::render($e);
             }else{
                 //系统异常，记录日志
                 $this->code = 500;
                 $this->msg = '服务器内部错误';
                 $this->errorCode = 999;
                 $this->recordErrorLog($e);
             }

         }
         $request = Request::instance();
         $result = [
             'msg'=>$this->msg,
             'error_code'=>$this->errorCode,
             'request_url'=>$request->url()
         ];

         return json($result,$this->code);
     }

     private function recordErrorLog(\Exception $e)
     {
         Log::init([
             'type'  => 'File',
             // 日志保存目录
             'path'  => LOG_PATH,
             // 日志记录级别
             'level' => ['error'],
         ]);

         Log::record($e->getMessage(),'error');
     }
}