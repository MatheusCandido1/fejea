<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ej;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        $ejs = DB::table('ej')->get();

        $top = DB::table('ej')
        ->selectRaw('ej.name, count(ej.id) as qnt')
        ->join('connected', 'connected.id_ej','=','ej.id')
        ->groupBy('ej.name')
        ->orderBy('qnt', 'DESC')
        ->first();

        $clients = DB::table('connected')
        ->selectRaw('count(*) as clients')
        ->first();

        $indica = DB::table('connected')
        ->selectRaw('count(distinct ej.id) as indica')
        ->join('ej', 'connected.id_ej','=','ej.id')
        ->first();

       
        $sum = 0;
        for($i = 1; $i < 5; $i++){
            
        $indicadas[$i] = DB::table('connected')
        ->selectRaw('count(distinct connected.id_ej'.$i.') as indicadas')
        ->first();
        
        $sum = $sum + $indicadas[$i]->indicadas;
        }

       // dd($sum);

        return view('site/home', ['ejs' => $ejs, 'top' => $top, 'clients' => $clients, 'indica'=>$indica, 'indicadas' => $sum]);
    }
}
