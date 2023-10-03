<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class wildanController extends Controller
{
    function index(){
    $judul = "hallo";
    $pengaduan = DB::table('pengaduan')->get();

    
    return view('home', ['Textjudul' => $judul, 'pengaduan' => $pengaduan]);
}

    function isi_pengaduan(){
       echo "tambah";
    }
    function tambah_pengaduan(request $request){
        $request->validate([
            'isi_laporan' => 'required|min:10'
        ]);
        
        $isi_pengaduan = $request->isi_laporan;

        DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' => '111',
            'isi_laporan' => $isi_pengaduan,
            'foto' => '',
            'status' => '0'
        ]);

        return redirect('home');
    }
}
