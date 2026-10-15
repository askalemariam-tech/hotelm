<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
  
    public function blog()
    {
        return view('home.blog'); // optional if using controller method
    }

    public function contact()
    {
        return view('home.contact'); // optional if using controller method
    }
    public function about()
    {
        return view('home.about'); // optional if using controller method
    }
    public function room()
    {
        return view('home.room'); // optional if using controller method    

    }  
}
