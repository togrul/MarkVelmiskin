<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $about = About::first();

        return view('about',compact('about'));
    }
}
