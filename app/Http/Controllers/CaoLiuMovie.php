<?php
/**
 * Created by PhpStorm.
 * Date: 2019-08-12
 * Time: 11:21
 */

namespace App\Http\Controllers;



class CaoLiuMovie implements MovieSourceInterface
{
    public function get()
    {
       return "桃谷绘里香";
    }

    public function play($name)
    {
        return $name . '《なな20歳　豆腐屋》';
    }
}