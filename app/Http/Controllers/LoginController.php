<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.login', [
            "active" => "Login",
            "title" => "Login"
        ]);
    }

    public function index1(){
        return view('login.login1', [
            "active" => "Login",
            "title" => "Login"
        ]);
    }

    public function index2(){
        return view('login.login2', [
            "active" => "Login",
            "title" => "Login"
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->level=="siswa") {
                return redirect('/materi');
            }
            else {
                Auth::logout();
                return redirect('/login')->with('loginError', 'Login Gagal! Hanya siswa yang dapat mengakses.');
            }
        }
        return back()->with('loginError', 'Login Gagal! Silakan Ulangi');
    }

    public function authenticateEmail(Request $request){
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->level=="siswa") {
                return redirect('/materi');
            }
            else {
                Auth::logout();
                return redirect('/login')->with('loginError', 'Login Gagal! Hanya siswa yang dapat mengakses.');
            }
            
        }
        return back()->with('loginError', 'Login Gagal! Silakan Ulangi');
    }

    public function authenticateMaster(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->level=="guru") {
                return redirect(route('materialdashboard'));
            }
            else if (auth()->user()->level=="admin") {
                return redirect(route('materialdashboard'));
            }
            else {
                Auth::logout();
                return redirect('/master')->with('loginError', 'Login Gagal! Hanya guru atau admin yang dapat mengakses.');
            }
        }
        return back()->with('loginError', 'Login Gagal! Silakan Ulangi');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function keluar(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/master');
    }
}
