<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'admin' || Auth::user()->role == "general manager") {
                return redirect()->intended('/administrator');
            }
            return redirect()->intended('/');
        }
        $kategori = Kategori::all();
        return view('frontend.login', [
            'kategori' => $kategori
        ]);
    }
    public function loginpost(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Login successful
            if (Auth::user()->role == 'admin' || Auth::user()->role == "general manager") {
                return redirect()->intended('/administrator');
            }
            return redirect()->intended('/');
        } else {
            // Login failed
            return redirect()->back()->withInput()->withErrors(['message' => 'Invalid credentials']);
        }
    }
    public function signup()
    {
        $kategori = Kategori::all();
        return view('frontend.signup', [
            'kategori' => $kategori
        ]);
    }

    public function signuppost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = "user";
        $user->save();

        Auth::login($user);

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
