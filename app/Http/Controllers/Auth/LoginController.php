<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\BaseModel;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request)
    {
//        dd($request->all());
//        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
//        if ($this->hasTooManyLoginAttempts($request)) {
//            $this->fireLockoutEvent($request);
//            Session::put('user_login_error', 'Too many attempts. Try later.');
//            return $this->sendLockoutResponse($request);
//        }
        if ($this->attemptLogin($request)) {
            //todo check email confirmation and status
            $user_info = Auth::user();

            // if(($user_info->role == BaseModel::ROLE_USER) && ($user_info->status == BaseModel::STATUS_INACTIVE || $user_info->email_confirmation == BaseModel::USER_EMAIL_CONFIRMATION_FALSE)){
            //     $message = 'Something went wrong. May be your account is inactive or mail address not confirm.';
            //     $this->logout($request);
            //     Session::put('user_login_error', $message);
            // }
            return $this->sendLoginResponse($request);
        }

        return $this->sendFailedLoginResponse($request);
    }
}
