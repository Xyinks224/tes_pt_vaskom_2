<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function index() {
        $user = User::get();
        $product = Product::get();

        $user_active = $user->where('status', 'enable')->count('id');
        $product_active = $product->where('status', 'enable')->count('id');

        return view('superadmin.home', [
            'user' => $user,
            'product' => $product,
            'user_active' => $user_active,
            'product_active' => $product_active,
        ]);
    }

}
