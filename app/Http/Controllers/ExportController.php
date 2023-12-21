<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CreditExport;
use App\Exports\DebitExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function export_credit()
    {
        return Excel::download(new CreditExport, 'Credit.xlsx');
    }
    public function export_debit()
    {
        return Excel::download(new DebitExport, 'Debit.xlsx');
    }
}
