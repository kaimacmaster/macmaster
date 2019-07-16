<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Change the locale, then show the application.
     *
     * @return Renderable
     */
    public function changeLocale($locale)
    {
        App::setLocale($locale);
        return view('welcome');
    }
}
