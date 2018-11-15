<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class areaController extends Controller
{
    function area(){
        $geography['geography'] = DB::table('geography')->get();
        if (count($geography[0]) > 0) {
            return view('survey',$geography);
        }else {
            return view('survey');
        }
    }
}
