<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 'superadmin') {
            return redirect()->route('superadmin.dashboard');
        } else if (Auth::user()->role == 'user') {
            return redirect()->route('home');
        } else {
            return redirect()->route('home');
        }
    }

    public function dashboard() {
        $products = Product::where('status', 'enable')->get();
        $latest = Product::orderBy('created_at', 'desc')->take(10)->get();

        // dd($latest->chunk(5));
        return view('welcome', [
            'products' => $products,
            'latest' => $latest
        ]);
    }
}
