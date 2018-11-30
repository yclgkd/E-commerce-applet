<?php
/**
 * Created by PhpStorm.
 * User: CHUNLAI
 * Date: 2018/10/7
 * Time: 10:15
 */

namespace app\api\validate;


class IDCollection extends BaseValidate
{
    protected $rule = [
        'ids' => 'require|checkIDs'
    ];

    protected $message = [
        'ids' => 'ids参数必须是以逗号分隔的多个正整数'
    ];
    // ids = id1, id2, id3....
    protected function checkIDs($value){
        $values = explode(',', $value);
        if (empty($values)){
            return false;
        }
        foreach ($values as $id){
            if (!$this->isPositiveInteger($id)){
                return false;
            }
        }
        return true;
    }
}