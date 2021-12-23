<?php

namespace App\Http\Controllers;

use App\Imports\DataLatihImport;
use Illuminate\Http\Request;
use Excel;

class ExcelController extends Controller
{
    public function index()
    {
        return view('excel');
    }

    public function excelDb(Request $request)
    {
        try {
            $collection = Excel::import(new DataLatihImport, request()->file('excel'));
        } catch (\Throwable $th) {
            return "Gagal Tersimpan";
        }

        return "Berhasil Disimpan";
        // return $collection;
    }

    public function excelView(Request $request)
    {
        try {
            $collection = Excel::toCollection(new DataLatihImport, request()->file('excel'));
        } catch (\Throwable $th) {
            return "Gagal Tersimpan";
        }

        // return $collection;

        return view('table-from-excel', compact('collection'));
    }
}
