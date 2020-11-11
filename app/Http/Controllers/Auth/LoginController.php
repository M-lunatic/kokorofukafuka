<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    protected function index()
    {
        //$user = Auth::user();    //現在認証されているユーザーの取得
        return view('/home');
    }

    protected function show()
    {
        
        //return view('/login');
    }
    protected function update()
    {
        //$user = Auth::user();
        //return view('mypage/update');
    }
    protected function edit()
    {
        
        //return view('mypage/edit');
    }
    protected function destroy()
    {
        
        //return view('mypage/delete');
    }


}
