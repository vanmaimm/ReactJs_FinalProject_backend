<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function search (Request $request){
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $person = $request->person;


    }
}
