<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
     /**
     * Show the login form.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {
        // Validate login data
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        // Attempt to authenticate the user
        if (auth()->attempt($request->only('email', 'password'))) {
            // Regenerate session to prevent session fixation attacks
            $request->session()->regenerate();

            // Redirect based on the user's role
            return $this->redirectBasedOnRole();
        }

        // If authentication fails, redirect back with an error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Redirect based on the user's role.
     */
    protected function redirectBasedOnRole()
    {
        $user = auth()->user();

        if ($user->role == 'mahasiswa') {
            return redirect()->route('dashboardMhs'); // Redirect to mahasiswa dashboard
        } elseif ($user->role == 'dekan') {
            return redirect()->route('dekanDashboard'); // Redirect to dekan dashboard
        } elseif ($user->role == 'pembimbing akademik') {
            dd($credentials);
            return view('dashboardPA'); 
        }
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
