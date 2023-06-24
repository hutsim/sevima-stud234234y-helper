<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('sign-in');
    }

    public function authenticate(Request $request)
    {

        $message = [
            'required' => ':attribute harus diisi.',
            'email' => 'Email harus berupa format email yang valid.'
        ];

        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], $message);

        // return $data;
        
        // jika user telah mengisi data
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            
            return redirect()->intended('/');

        } else {
            session()->flash('salah', 'Email atau Password Anda Salah');
            return redirect('/sign-in');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/sign-in');
    }
}
