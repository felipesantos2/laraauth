<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function create(): View
    {
        return view('guest.pages.login');
    }

    // https://www.w3docs.com/snippets/php/laravel-get-parameters-from-http-request.html
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if (!$validated) {
            return;
        }

        // create logged session
        $request->session()->regenerate();

        $request->session()->put('logged', 'true');


        dd($request->session());

        // $this->authenticate();
    }

    private function authenticate()
    {
        session();
    }
}
