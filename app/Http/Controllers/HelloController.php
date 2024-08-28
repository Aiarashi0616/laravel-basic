<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index() {
       

        // 変数$postsをposts/indexファイルに渡す
        return view('index');
    }    
}
