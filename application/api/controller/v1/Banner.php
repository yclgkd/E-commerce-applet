<?php
/**
 * Created by PhpStorm.
 * User: CHUNLAI
 * Date: 2018/9/16
 * Time: 15:31
 */

namespace app\api\controller\v1;

use app\api\lib\exception\BannerMissException;
use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePositiveInt;

class Banner
{
    /**
     * 获取指定banner的id信息
     * @url /banner/:id
     * @$id banner的id号
     * @http GET
     */
    public function getBanner($id)
    {
        //AOP 面向切面编程
        (new IDMustBePositiveInt())->goCheck();
        $banner = BannerModel::getBannerByID($id);
        if (!$banner){
            throw new BannerMissException();
        }
        config('setting.img_prefix');
        return json($banner, 200);
    }
}