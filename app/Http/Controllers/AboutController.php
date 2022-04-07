<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public  function about(){
        return view('about');
    }
    public function aboutblood(){
        return view('aboutblood');
    }
     public function doneteblood(){
        return view('donateblood');
    }
    public function donetedblooduse(){
        return view('donatedblooduse');
    }

}
