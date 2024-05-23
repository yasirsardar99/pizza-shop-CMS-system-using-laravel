<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pizzashop;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $all_pizza = pizzashop::get();
        $all_pizza = pizzashop::get();
        return view('home', compact('all_pizza'));
    }
}
