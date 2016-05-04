<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;


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

    public function dash()
    {
        $data = [

            'newUsers' => DB::table('users')->where('seen', 0)->count(),
            'totalUsers' => DB::table('users')->count(),
            'newContacts' => DB::table('users')->count(),
            'newPosts' => DB::table('users')->count(),
            'newComments' => DB::table('users')->count(),
        ];

        return view('admin.dash', $data);
    }

}
