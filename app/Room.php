<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function Typerooms(){
        return $this->belongsTo("App\Typeroom","typeroom", "id" );
    }
    public function User(){
        return $this->belongsToMany("App\User","bookings","user_id", "room_id" );
    }
}
