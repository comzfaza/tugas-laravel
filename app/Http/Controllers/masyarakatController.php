<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class masyarakatController extends Controller
{
    function rakyat(){
  
        $masyarakat = DB::table('masyarakat')->get();
    
        
        return view('masyarakat', ['masyarakat' => $masyarakat]);
}
 

    function register(){
  
        $masyarakat = "daftar masyarakat";
    
        
        return view('loginmasyarakat', ['loginmasyarakat' => $masyarakat]);
}
}

