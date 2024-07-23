<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level == 'admin') {
                return redirect()->route('adminIndex');
            } elseif ($user->level == 'siswa') {
                return redirect()->route('studentIndex');
            } elseif ($user->level == 'guru') {
                return redirect()->route('teacherIndex');
            }
        }

        return redirect()->route('login-index')->with('error', 'Email atau Password yang dimasukkan tidak valid');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
