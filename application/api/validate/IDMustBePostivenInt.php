<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/2
 * Time: 11:16
 */

namespace app\api\validate;





class IDMustBePostivenInt extends BaseValidate
{
    protected $rule = [
        'id'=>'require|isPostivenInteger'
    ];
    protected function isPostivenInteger($value,$rule='',$data='',$field=''){
        if(is_numeric($value) && is_int($value+0) && ($value+0)>0){
            return true;
        }else{
            return $field.'必须为正整数';
        }
    }
}