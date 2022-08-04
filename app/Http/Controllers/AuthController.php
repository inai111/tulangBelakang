<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function storeLogin()
    {
        $user = User::where('email', request()->email)->first();
        if($user)
        {
            if(Hash::check(request()->password, $user->password))
            {
                if($user->roles == 'admin')
                {
                    Auth::login($user);
                    return redirect('admin')->with('status','Berhasil Login.');
                }else{
                    Auth::login($user);
                    return redirect('user')->with('status','Berhasil Login.');
                }
            }
            return redirect('login');
        }
        return redirect('login');
    }

    public function logout()
    {
        $user = request()->user();
        Auth::logout($user);
        return redirect("login");
    }

    public function register()
    {
        return view('register');
    }

    public function storeRegister(Request $request)
    {
        $validator = Validator::make(request()->all(),[
            'email' => 'required|email|unique:users',
            'name' => 'required|string|max:255',
            'password' => 'required|min:8',
            'password_confirmasi' => 'required|same:password',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        User::create([
            'name' => request()->name,
            'email' => request()->email,
            'password' => Hash::make(request()->password),
            'password_confirmasi' => Hash::make(request()->password_confirmasi),
            'roles' => 'user',
        ]);

        return redirect()->back()->with('status','Berhasil Registrasi Akun Baru.');
    }
}
