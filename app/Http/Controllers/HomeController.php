<?php

namespace App\Http\Controllers;

use App\DataModels;
use App\HasilModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            $data = DataModels::orderBy('id', 'desc')->Limit(1)->get();
            $hasil = HasilModels::orderBy('id', 'desc')->Limit(1)->get();
            return view('menu.dashboard', compact('data', 'hasil'));
        }
    }
}
