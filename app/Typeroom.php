<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typeroom extends Model
{
    public function rooms(){
        return $this->hasMany("App\Room","typeroom", "id");
    }
}
