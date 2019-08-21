<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $caoLiuService;
    public $baiDuCloudMovieService;

    public function __construct(CaoLiuMovieService $caoLiuService, BaiDuCloudMovieService $baiDuCloudMovieService)
    {
        $this->caoLiuService = $caoLiuService;
        $this->baiDuCloudMovieService = $baiDuCloudMovieService;
    }

    public function test()
    {
        new phpDocumentor\Reflection\Element();
    }

    public function watchMovie()
    {
        $a = $this->caoLiuService->watch();

        $b = $this->baiDuCloudMovieService->watch();

        echo $a . PHP_EOL . $b;
    }
}
