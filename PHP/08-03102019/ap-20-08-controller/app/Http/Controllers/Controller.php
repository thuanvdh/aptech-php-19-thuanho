<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function traDuLieu() 
    {
        return 'Hello PHP 19';
    }

    function hienThiBaiSo($id)
    {
        return view('bao',['baiBaoSo' => $id]);
    }
}
