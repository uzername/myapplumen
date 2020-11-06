<?php

namespace App\Http\Controllers;

class MainPageController extends Controller
{
    /**
     * Create a new controller instance for displaying main page
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    public function show() {
        return view('app');
    }
    //
}