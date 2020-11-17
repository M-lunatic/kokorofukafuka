<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diagnosis extends Model
{
    //
    protected $fillable = [
            'user_id',
            'type',
            'type_url',             
            'EorI1' ,
            'EorI2' ,
            'EorI3' ,
            'EorI4' ,
            'EorI5' ,
            'SorN1' ,
            'SorN2' ,
            'SorN3' ,
            'SorN4' ,
            'SorN5' ,
            'TorF1' ,
            'TorF2' ,
            'TorF3' ,
            'TorF4' ,
            'TorF5' ,
            'JorP1' ,
            'JorP2' ,
            'JorP3' ,
            'JorP4' ,
            'JorP5' ,

        ];
        protected $hidden = [
            //
            
        ];
        protected $casts = [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];

    //ソフトデリート用の記述
    use SoftDeletes;

    //protected $table = 'users';
    protected $dates = ['deleted_at'];

}
