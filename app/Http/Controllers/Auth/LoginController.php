<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function create(): View
    {
        return view('guest.pages.login');
    }

    // https://www.w3docs.com/snippets/php/laravel-get-parameters-from-http-request.html
    public function store(Request $request): RedirectResponse
    {
        
        $validated = $request->validate([
            // 'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if (!$validated) {
            return Redirect::route('login.create')
                ->with('status', 'Errooooooooooooooooooooooo!');
        }

        $authenticated = Auth::guard('web')->attempt($validated);

        if (!$authenticated) {
            return Redirect::route('login.create')
                ->with('status', 'Errooooooooooooooooooooooo!');
        }

        // create logged session
        $request->session()->regenerate();
        $request->session()->put('logged', 'true');

        // success
        return Redirect::route('dashboard')
            ->with('status', 'Autenticato com Sucesso!');
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->put('logged', 'false');

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // dd($request->session());

        return Redirect::route('home');
    }
}
