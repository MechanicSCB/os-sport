<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function update()
    {
        if(request()->url){
            Browsershot::url(request()->url)->save('screenshots/screenshot.jpg');
        }

        return back();
    }
}
