<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/5
 * Time: 15:37
 */

namespace app\api\model;


class Theme extends BaseModel
{
    protected $hidden = ['delete_time','update_time','head_img_id','topic_img_id'];
    public function topicImg(){
        return $this->belongsTo('Image','topic_img_id','id');
    }
    public function headImg(){
        return $this->belongsTo('Image','head_img_id','id');
    }
    public function products(){
        return $this->belongsToMany('Product','theme_product','product_id','theme_id');
    }
    public static function getThemeWithProduct($id){
        $theme = self::with('products,topicImg,headImg')->find($id);
        return $theme;
    }
}