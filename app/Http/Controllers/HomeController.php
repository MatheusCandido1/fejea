<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ej;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        $ejs = DB::table('ej')->get();

        return view('site/home', ['ejs' => $ejs]);
    }
}
