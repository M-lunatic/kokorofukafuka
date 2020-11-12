<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    //
    protected $fillable = [            
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
            'user_id',
        ];
        protected $casts = [
            'created_at' => 'datetime',
        ];
}
