<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
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
    public function login(Request $request){
        $this->validate($request, [
            'team_name' => 'required|string',
            'password' => 'required',
        ]);
        $login =  [
            'team_name' => $request->team_name,
            'password' => $request->password
        ];
        if(auth()->attempt($login)){
            if(\Auth::user()->type=='admin'){
                return redirect()->route('admin');
            }else{
                return redirect()->route('home');
            }
          
        }
        return redirect()->route('login')->with(['error' => 'Team Name / Password Incorrect' ]);
    }
}
