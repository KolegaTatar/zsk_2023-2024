<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowDBController extends Controller
{
    public function ShowTableUsers(){
        return DB::table("users") -> get();
    }
}
