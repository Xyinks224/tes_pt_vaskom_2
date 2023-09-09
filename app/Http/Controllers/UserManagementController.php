<?php

namespace App\Http\Controllers;

use App\Mail\UserPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role', 'user')->orderBy('updated_at', 'desc')->simplepaginate(10);
        return view('superadmin.users.index', [
            'users' => $users
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $input = $request->all();
        $password = Str::random(10);
        $input['password'] = bcrypt($password);

        $user = User::create($input);

        if ($request->profile) {
            $input['profile'] = Storage::put('users/'.$user->id.'/profile', $request->profile);
        }

        $user->update($input);

        $data = ([
            'name' => $user->name,
            'password' => $password
        ]);

        if ($user->status == 'enable') {
            Mail::to($user->email)->send(new UserPasswordMail($data));
        }

        Session::flash('message', 'Berhasil Menambah User '.$user->name);
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

        $password = Str::random(10);
        $input['password'] = bcrypt($password);

        if ($request->profile) {
            Storage::delete($user->getRawOriginal('profile'));
            $input['profile'] = Storage::put('users/'.$user->id.'/profile', $request->profile);
        }

        $user->update($input);

        $data = ([
            'name' => $user->name,
            'password' => $password
        ]);

        if ($user->status == 'enable') {
            Mail::to($user->email)->send(new UserPasswordMail($data));
        }

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
        Session::flash('message', 'Berhasil Menghapus User '.$user->name);
        return redirect()->back();
    }
}
