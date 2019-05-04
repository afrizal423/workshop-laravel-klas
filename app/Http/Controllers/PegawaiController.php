<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    //
    public function index(){
        $query = DB::table('tb_pegawai')->get();

        return view('coba',['data' =>$query]);
    }
    
    public function add(){
        return view('tambah');
    }
    public function prosesAdd(Request $request){
    //dd($request->input());
    $input = $request->input();
    //dd($input);
    $query = DB::table('tb_pegawai');
    $data = [
        'nama_pegawai' => $input['namapegawai'],
        'jabatan_pegawai' => $input['jabatanpegawai'],
        'alamat_pegawai' => $input['alamatpegawai'],
        'umur_pegawai' => $input['umurpegawai'],
        'no_telp' => $input['notelp']
    ];
    $query->insert($data);
    
     return redirect('/');
    }
    public function update($id){
        $query = DB::table('tb_pegawai');
        $data = [
            'data' => $query->where('id_pegawai','=',$id)->first()
        ];
        
        return view('ubah',$data);
    }
    public function prosesUpdate(Request $request){
        //dd($request->input());
        $input = $request->input();
        //dd($input);
        $param = \request()->segments();
        $query = DB::table('tb_pegawai');
        $data = [
            'nama_pegawai' => $input['namapegawai'],
            'jabatan_pegawai' => $input['jabatanpegawai'],
            'alamat_pegawai' => $input['alamatpegawai'],
            'umur_pegawai' => $input['umurpegawai'],
            'no_telp' => $input['notelp']
        ];
        $query->where('id_pegawai','=',$param[2]);
        $query->update($data);
        
         return redirect('/');
        }
    public function delete($id){
        DB::table('tb_pegawai')->where('id_pegawai',$id)->delete();
        return redirect('/');
    }
}
