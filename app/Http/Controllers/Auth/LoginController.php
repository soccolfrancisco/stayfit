<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\View\View;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * LoginController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * @return Factory|View
     */
    public function index()
    {
        return View('auth.login');
    }
}
