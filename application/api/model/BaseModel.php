<?php

namespace app\api\model;

use think\Model;

class BaseModel extends Model
{
    protected function prefixImgUrl($value, $data){
        $findUrl = $value;
        if ($data['from'] == 1){
            $findUrl = config('setting.img_prefix').$value;
        }
        return $findUrl;
    }
}
