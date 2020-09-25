<?php

namespace App\Exports;

use App\Connected;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;

class ConnectedExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $data = DB::table('connected')
        ->selectRaw('ej.name as indicou, connected.id_ej1 as id_ej1,connected.id_ej2 as id_ej2,connected.id_ej3 as id_ej3,connected.id_ej4 as id_ej4,customer_name, customer_gap, customer_information, customer_phone, customer_email')
        ->join('ej', 'ej.id', '=','connected.id_ej')
        ->get();
        return view('exports.users', ['data' => $data]);
    }
}
