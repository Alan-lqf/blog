<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        echo config('database.connections.mysql.prefix');    }

    public function store()
    {
        echo 'store';

    }
}
