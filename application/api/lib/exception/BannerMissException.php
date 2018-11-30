<?php
/**
 * Created by PhpStorm.
 * User: CHUNLAI
 * Date: 2018/9/18
 * Time: 16:35
 */

namespace app\api\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的Banner不存在';
    public $errorCode = 40000;
}