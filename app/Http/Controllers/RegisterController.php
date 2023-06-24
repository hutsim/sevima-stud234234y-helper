<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('sign-up');
    }

    public function register(Request $request)
    {
        $message = [
            'required' => ':attribute harus diisi.',
            'min' => ':attribute minimal memiliki :min karakter.',
            'confirmed' => 'Konfirmasi password tidak Sesuai',
            'email' => 'Email harus berupa format email yang valid.'
        ];

        $register = $request->validate([
            'name' => 'required|min:7',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8'
        ], $message);

        $existingUser = User::where('name', $register['name'])->first();
        if ($existingUser) {
            session()->flash('name', 'Username sudah digunakan.');
            return redirect('/sign-up');
        }

        $existingEmail = User::where('email', $register['email'])->first();
        if ($existingEmail) {
            session()->flash('email', 'Email sudah digunakan.');
            return redirect('/sign-up');
        }

        $user = new User();
        $user->username = $register['name'];
        $user->email = $register['email'];
        $user->password = bcrypt($register['password']);
        $user->save();
        return redirect('/sign-in');
    }
}
