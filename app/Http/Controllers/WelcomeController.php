<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        
        return view('welcome', [
            'slides' => [
                'slides/slide1.jpg',
                'slides/slide2.jpg',
                'slides/slide3.jpg',
                'slides/slide4.jpg',
                'slides/slide5.jpg',
            ],
        ]);
    }
}
