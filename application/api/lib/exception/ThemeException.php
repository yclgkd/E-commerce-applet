<?php
/**
 * Created by PhpStorm.
 * User: CHUNLAI
 * Date: 2018/10/7
 * Time: 16:10
 */

namespace app\api\lib\exception;


class ThemeException extends BaseException
{
    public $code = 404;
    public $msg = '指定主题不存在，请检查主题ID';
    public $errorCode = 30000;
}