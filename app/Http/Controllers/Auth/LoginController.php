<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
//    protected function attemptLogin(Request $request)
//    {
////        dd($request);
////        return $this->guard()->attempt(
////            $this->credentials($request), $request->has('remember')
////        );
//        $data=[
//            'email'=>$request->email,
//            'password'=>Hash::make(($request->password))
//        ];
////        dd($data);
////        dd($this->credentials($request));
//        if(Auth::attempt($data, $request->has('remember'))){
////        if (Auth::attempt($this->credentials($request), $request->has('remember'))) {
//
//            Auth::login(Auth::user(), true);
//
//            // print user information
//            dd(Auth::user());
//
//            //redirect back to homepage
////            return Redirect::to('/');
//        } else {
////            return View::make('base/login')->with('login_errors', true);
//            echo "try again";
//            dd($data);
//        }

//    }
}
