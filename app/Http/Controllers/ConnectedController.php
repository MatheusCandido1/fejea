<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connected;
use Illuminate\Support\Facades\DB;
use App\Exports\ConnectedExport;
use Maatwebsite\Excel\Facades\Excel;

class ConnectedController extends Controller
{
    public function store(Request $request) {
        Connected::create($request->all());
        return redirect()->back()->with('alert', 'Lead enviado com sucesso!');
    }

    public function export(){
        return Excel::download(new ConnectedExport, 'leads.xlsx');
    }
}
