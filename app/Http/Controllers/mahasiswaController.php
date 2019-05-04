<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    //
    function index(){
        $nama = "Afrizal";
 
        $pelajaran = ["Makan","Tidur","Main","Buka Laptop"];
     
        return view('mahasiswa',['nama' => $nama , 'matkul' => $pelajaran]);
    }
  
}
