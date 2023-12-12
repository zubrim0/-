<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function welcome()
    {
        return view('welcome', ['slides' => [D:\laragon\www\conference\public\slides]]);
    }
}
