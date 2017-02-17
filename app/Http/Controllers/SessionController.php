<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('session.create');
    }

    public function store()
    {
        if (!auth()->attempt(request(['email', 'password']))) {
            return redirect()->back()->withErrors([
                'message' => 'Please check your credentials and tray again.'
            ]);
        }

        return redirect()->home();
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}
