<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->middleware('verified');
    }
    
    public function mypage()
    {
        $user = Auth();
        return view('mypage',compact('user'));
    } 
    
    public function show($id)
    {
        $user = User::find($id);   
        return view('profile-show',compact('user'));
    }
    public function update(Request $request,$id)
    {
        $user = User::find($id); 
        $user->fill( $request->all() ); 
        $user->save();
        return redirect('mypage');
    }
    public function edit($id)
    {
        
        return view('profile-edit');
    }
    public function question()
    {
        $id = Auth()->user();
        $user = User::find($id);
        return view('profile-question',compact('user'));
    }


    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/');
    }











}
