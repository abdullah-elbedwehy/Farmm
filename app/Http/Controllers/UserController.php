<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function register(Request $request)
    {
        $response = $request->validate([
            'email' => ['required'],
            'gender' => 'required',
            'name' => ['required'],
            'password' => ['required']
        ]);
        $response['password'] = bcrypt($response['password']);
        User::create($response);

        return redirect()->intended('/login');
        
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            // Regenerate session to prevent fixation attacks
            $request->session()->regenerate();

            return redirect()->intended('/home'); // or wherever you want
        }

        return back()->with('error', 'Invalid email or password.');
    }

}
