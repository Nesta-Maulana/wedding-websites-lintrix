<?php

namespace App\Http\Controllers\Wedding;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Wedding5Controller extends Controller
{
    public function index(){
        return view('wedding-5.index');
    }
}
