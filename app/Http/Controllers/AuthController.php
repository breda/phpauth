<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {

    /**
     * Get login page.
     * 
     * @return Illuminate\Http\Response
     */
    public function getLoginPage() {
        return view('auth/login');
    }

    /**
     * Perform login logic.s
     * 
     * @param  Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function performLogin(Request $request) {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            return redirect()->route('auth.get_login');
        } else {
            return redirect()
                ->route('auth.get_login')
                ->with('message', 'Wrong email/password combination.');
        }
    }

    /**
     * Perform logout
     * 
     * @param  Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function performLogout(Request $request) {
        Auth::logout();

        return redirect()
            ->route('auth.get_login')
            ->with('message', 'You have been logged out.');
    }

}