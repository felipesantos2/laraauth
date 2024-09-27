<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('guest.pages.login');
    }
}
