<?php
/**
 * Created by PhpStorm.
 * User: CHUNLAI
 * Date: 2018/9/17
 * Time: 15:43
 */

namespace app\api\validate;


class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];
    protected $message = [
        'id' => 'id必须为正整数'
    ];
}