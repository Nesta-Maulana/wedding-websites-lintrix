<?php

namespace App\Http\Controllers\Wedding;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Wedding4Controller extends Controller
{
    public function index(){
        return view('wedding-4.index');
    }
}
