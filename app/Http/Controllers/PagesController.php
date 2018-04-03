<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function new(){
        echo "my first controller";
        
        return view('welcome');
    }
}
