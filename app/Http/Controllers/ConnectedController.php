<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connected;

class ConnectedController extends Controller
{
    public function store(Request $request) {
        Connected::create($request->all());
        return redirect()->back() ->with('alert', 'Lead enviado com sucesso!');
    }
}
