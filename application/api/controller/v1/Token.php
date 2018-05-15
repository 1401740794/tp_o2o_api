<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/7
 * Time: 15:28
 */

namespace app\api\controller\v1;


use app\api\service\UserToken;
use app\api\validate\TokenGet;
use app\api\service\Token as TokenService;
use app\lib\exception\ParameterException;

class Token
{
    public function getToken($code=''){
        (new TokenGet())->goCheck();
        $ut = new UserToken($code);
        $token = $ut->get();
        return [
            'token'=>$token
        ];
    }
    public function verifyToken($token=''){
        if(!$token){
            throw new ParameterException([
                'msg'=>'token不允许为空'
            ]);
        }
        $valid= TokenService::verifyToken($token);
        return [
            'isValid' => $valid
        ];
    }
}