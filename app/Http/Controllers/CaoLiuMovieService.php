<?php
/**
 * Created by PhpStorm.
 * Date: 2019-08-12
 * Time: 11:23
 */

namespace App\Http\Controllers;



class CaoLiuMovieService
{
    public $movieSource;

    public function __construct(MovieSourceInterface $movieSource)
    {
        $this->movieSource = $movieSource;
    }

    public function watch()
    {
        $name = $this->movieSource->get();

        return $this->movieSource->play($name);
    }
}