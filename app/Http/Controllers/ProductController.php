<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('updated_at', 'desc')->simplepaginate(10);
        return view('superadmin.product.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:1'],
        ]);

        $input = $request->all();

        $product = Product::create($input);

        if ($request->image) {
            $input['image'] = Storage::put('product', $request->image);
        }


        $product->update($input);

        Session::flash('message', 'Berhasil Menambah Produk '.$product->name);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id],
        ]);

        $input = $request->all();
        $input['password'] = bcrypt(Str::random(10));

        if ($request->profile) {
            Storage::delete($user->getRawOriginal('profile'));
            $input['profile'] = Storage::put('users/'.$user->id.'/profile', $request->profile);
        }


        $user->update($input);

        Session::flash('message', 'Berhasil Mengubah User '.$user->name);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($user->profile) {
            Storage::delete($user->getRawOriginal('profile'));
        }
        $user->delete();
        Session::flash('message', 'Berhasil Mengubah User '.$user->name);
        return redirect()->back();
    }
}
