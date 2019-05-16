<?php
/**
 * Created by PhpStorm.
 * User: youxingxiang
 * Date: 2019/5/15
 * Time: 5:14 PM
 */

namespace Cxp\Avatar\Facades;
use Illuminate\Support\Facades\Facade;
class Avatar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'avatar';
    }
}