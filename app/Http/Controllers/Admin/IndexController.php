<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $user = DB::table('user')->where('user_id','>',1)->get();
        dd($user);
       return view('welcome');
    }
}
