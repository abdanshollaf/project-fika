<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataModels;
use DB;
use Storage;
use Session;
use App\Http\Controllers\DocxToTextController;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Session as FacadesSession;

class DataController extends Controller
{
    public function index()
    {
        if (FacadesAuth::check()) {
            $data = DataModels::orderBy('id', 'asc')->get();
            // dd($data);
            return view('menu.data', compact('data'));
        }
    }

    public function add()
    {
        if (FacadesAuth::check()) {
            return view('menu.tambahdata');
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tahun' => 'required',
            'volume' => 'required',
            'no' => 'required',
            'penulis' => 'required',
            'judul' => 'required',
            'dokumen' => 'required',
            'dokumen*' => 'mimes:doc,docx'
        ]);

        if ($request->hasFile('dokumen')) {
            $dokumen = $request->file('dokumen');
            $name = $dokumen->getClientOriginalName('dokumen');
            $path = $dokumen->move(public_path() . '/upload/', $name);
            $text = new DocxToTextController($path);
            $convert = $text->convertToText();
            DataModels::create([
                'no' => $request['no'],
                'tahun' => $request['tahun'],
                'volume' => $request['volume'],
                'penulis' => $request['penulis'],
                'judul' => $request['judul'],
                'abstrak' => $convert,
                'namafile' => $name,
                'path' => $path,
            ]);
            FacadesSession::flash('success_msg', 'File Uploaded');
        }
        FacadesSession::flash('danger_msg', 'File Not Uploaded! Please Retry');
        return redirect()->route('datajurnal');
    }

    public function delete($id)
    {
        $del = DataModels::find($id);
        $test = unlink($del->path);
        $del->delete();
        FacadesSession::flash('danger_msg', 'File deleted successfully!');
        return redirect()->route('datajurnal');
    }
}
