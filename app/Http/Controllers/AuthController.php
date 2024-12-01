<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
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
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($request->only('email', 'password'))) {
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
        $user = Auth::user();

        if ($user->role == 'mahasiswa') {
            return redirect()->route('dashboardMhs'); // Redirect to mahasiswa dashboard
        } elseif ($user->role == 'dekan') {
            return redirect()->route('dekanDashboard'); // Redirect to dekan dashboard
        } elseif ($user->role == 'pembimbing akademik') {
            return redirect()->route('dashboardPA'); // Redirect to kaprodi dashboard
        }
    }

    /**
     * Log the user out of the application.
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        // Invalidate the session to prevent session fixation attacks
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
