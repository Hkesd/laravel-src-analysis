<?php
/**
 * Created by PhpStorm.
 * Date: 2019-08-12
 * Time: 10:52
 */

namespace App\Http\Controllers;


interface MovieSourceInterface
{
    public function get();

    public function play($name);
}