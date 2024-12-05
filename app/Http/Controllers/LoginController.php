<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     /**
     * Show the login form.
     */
    public function create()
    {
        return view('login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        // Attempt to authenticate
        if (Auth::attempt($credentials)) {
            // dd($credentials);
            $user = Auth::user();
            
            // Redirect based on user role
            if ($user->role === 'mahasiswa') {
                return redirect()->route('dashboardmhs');
            } elseif ($user->role === 'bagian akademik') {
                return redirect()->route('dashboardba');
            } elseif ($user->role === 'pembimbing akademik') {
                return redirect()->route('dashboardpa');
            } else if ($user->role === 'dekan') {
                return redirect()->route('dashboarddekan');
            } else if ($user->role === 'kaprodi') {
                return redirect()->route('dashboardkaprodi');
            }
            else {
                return redirect()->route('login')->withErrors(['role' => 'Role tidak valid.']);
            }
        }
    
        // If login fails
        return redirect()->route('login')->withErrors(['email' => 'Email atau password salah.']);
    }
    



    /**
     * Log the user out of the application.
     */
    public function destroy(Request $request)
    {
        auth()->logout();

        // Invalidate the session to prevent session fixation attacks
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
