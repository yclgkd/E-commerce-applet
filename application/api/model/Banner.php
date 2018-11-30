<?php
/**
 * Created by PhpStorm.
 * User: CHUNLAI
 * Date: 2018/9/18
 * Time: 13:44
 */

namespace app\api\model;


use think\Model;

class Banner extends Model
{
    protected $hidden = ['update_time', 'delete_time'];
    public function items(){
        return $this->hasMany('BannerItem','banner_id','id');
    }

    public static function getBannerByID($id){
        $banner = self::with(['items', 'items.img'])
            ->find($id);
        return $banner;
    }
}