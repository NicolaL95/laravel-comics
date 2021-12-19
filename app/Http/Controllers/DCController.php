<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DCController extends Controller
{
public function show($num)
{
    $dett_com = config('comics');
    return view('dett_comics',compact('num','dett_com'));
}
}
