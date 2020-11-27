<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','user_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * パスワード再設定メールの送信
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomResetPassword($token));
    }

    //ソフトデリート用の記述
    use SoftDeletes;

    protected $table = 'users';
    protected $dates = ['deleted_at'];

    /*
    public static $editRules = array(

        'user_id' => 'required|string|max:255|unique:users',
        'user_name' => 'required|string|max:50',
        'email' => 'required|string|email|max:255|unique:users',
        'password'=> 'required|string|min:6|',
        
         );
*/
    public static $editPasswordRules = array(
        'password'=> 'required|string|min:6|',
    );

    public static $editEmailRules = array(
        'email' => 'required|string|email|max:255|unique:users',
    );
    public static $editUseridRules = array(
        'user_id' => 'required|string|max:255|unique:users',
    );
    public static $editNameRules = array(
        'user_name' => 'required|string|max:50',
    );

}

