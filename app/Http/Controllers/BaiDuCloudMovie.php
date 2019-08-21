<?php
/**
 * Created by PhpStorm.
 * Date: 2019-08-12
 * Time: 10:53
 */

namespace App\Http\Controllers;


class BaiDuCloudMovie implements MovieSourceInterface
{
    public function get()
    {
        return '北野のぞみ';
    }

    public function play($name)
    {
        return $name . ' is good !!!';
    }
}