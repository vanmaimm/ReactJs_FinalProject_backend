<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function rooms(){
        return $this->belongsTo("App\Room", "room_id", "id");
    }
}
