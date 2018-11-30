<?php
/**
 * Created by PhpStorm.
 * User: CHUNLAI
 * Date: 2018/10/7
 * Time: 9:46
 */

namespace app\api\controller\v1;


use app\api\lib\exception\ThemeException;
use app\api\validate\IDCollection;
use app\api\model\Theme as ThemeModel;

class Theme
{
    public function getSimpleList($ids=''){
        (new IDCollection())->goCheck();
        $ids = explode(',', $ids);
        $result = ThemeModel::with('topicImg,headImg')->select($ids);
        if (!$result){
            throw new ThemeException();
        }
        return json($result);
    }
}