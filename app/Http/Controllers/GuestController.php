<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Khill\Lavacharts\Lavacharts;
use App\Http\Controllers\Lava;

class GuestController extends Controller
{

    public function index()
    {
        return view('guest');
    }

    public function blog()
    {
        return view('blog');
    }

    public function charts()
    {

          return view('widget');
    }

}
