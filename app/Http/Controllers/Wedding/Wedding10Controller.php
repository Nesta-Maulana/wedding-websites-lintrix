<?php

namespace App\Http\Controllers\Wedding;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Wedding10Controller extends Controller
{
    public function index(){
        return view('wedding-10.index');
    }
}
