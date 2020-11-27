<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash; //ハッシュ化
use Illuminate\Support\Facades\Validator; //バリデーション

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

    public function update(Request $request, $id)
    {
        
        // 選択ページ情報取得
        $page = $request->page;
        $rule ="";

        // 選択ページでバリデーションを選ぶ
        if ($page == 'name'){

            $rule .= User::$editNameRules;

        } elseif ($page == 'email'){

            $rule .= User::$editEmailRules;

        } elseif ($page == 'password'){

            $rule .= User::$editPasswordRules;

        } elseif ($page == 'user_id'){

                $rule .= User::$editUseridRules;

        }

        // バリデーションチェック
        $this->validate($request, $rule);

        //レコード取得
        $user = User::find($id);

        // リクエストデータ受取
        $form = $request->all();

        // フォームトークン削除
        unset($form['_token']);

        //ページ情報削除
        unset($form['page']);

        // フォーム要素の評価

        foreach ($form as $key => $value) {

        // nullの場合更新対象から除外する
    
        if($value == null) {
    
            unset($form[$key]);
    
            }
    
        }
        
        // 旧パスワードチェック
        $passcheck = Hash::check($form['old_password'], $user->password);
        // old_passwordにチェック結果をいれて、バリデーションチェックする
        $validator = Validator::make(['old_password' => $passcheck],
        ['old_password' => 'accepted'], ['現在のパスワードが一致しません']);     

        //パスワードのみハッシュ化
        if (isset($form['password'])) {

            $form['password'] = Hash::make($form['password']);
            
        }

        //アップデート
        $user->fill($form)->save();

       return redirect()->route('profile.show',compact('user'));
    }

    public function useredit($page)
    {
        $user = Auth::user(); 
        return view('profile-edit',compact('page','user'));
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
