<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function about()
    {
        $news=['First news', 'Second news', 'Third news'];
        return view('pages.about',compact('news'));
    }
}
