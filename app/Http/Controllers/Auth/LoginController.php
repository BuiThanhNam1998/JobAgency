<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * Check user's role and redirect user based on their role
     * @return
     */
    public function authenticated()
    {
        $user = auth()->user();
        if($user->hasRole($user->id, User::ADMIN))
        {
            return redirect()->route('admin.career.list');
        } elseif ($user->hasRole($user->id, User::EMPLOYER)) {
            return redirect()->route('employer.job.list');
        }

        return redirect()->route('index');
    }
}
