<?php

namespace App\Http\Controllers;

use App\HasilModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Excel;
use Illuminate\Support\Facades\Auth;

class HasilController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $data = HasilModels::orderBy('id', 'asc');
            return view('menu.monitoring', compact('data'));
        }
    }

    public function export()
    {
        if (Auth::check()) {
            $data = DB::table('tbl_uji')->orderBy('id', 'asc')->get()->toArray();
            $dataarray[] = array('No', 'Abstrak', 'Kata Yang Salah', 'Koreksi Kata');
            $no = 1;
            foreach ($data as $aww) {
                $dataarray[] = array(
                    'No' => $no++,
                    'Abstrak' => $aww->abstrak,
                    'Kata Yang Salah' => $aww->kata_salah,
                    'Koreksi Kata' => $aww->koreksi
                );
            }
            Excel::create('Hasil Pengujian', function ($excel) use ($dataarray) {
                $excel->setTitle('Hasil Pengujian');
                $excel->sheet('Hasil Pengujian', function ($sheet) use ($dataarray) {
                    $sheet->fromArray($dataarray, null, 'A1', false, false);
                });
            })->download('xlsx');
        }
    }
}
