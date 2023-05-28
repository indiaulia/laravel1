<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class TugasController2 extends Controller
{
    function index(){
        $data = User::whereId(11)->first(); 
        //dd($data);
        return view('latihan_user',compact(['data']));
    }
    
    
     function latihan_tambah_data(){
            return view('latihan_tambah_user');
        }

        function latihan_input_data(Request $request){
            $user = new user();
            $user->nama = $request->nama;
            $user->kelas = $request->kelas;
            $user->nis = $request->nis;
            $user->save();
            return redirect('/latihan_tampil_data');
        }

        function latihan_tampil_data(){
            $data = User::all();
            return view('latihan_data_siswa',compact(['data']));
        }

        function latihan_hapus_data($id){
            //dd($id);
            $data = User::whereId($id)->delete();
            return redirect('/latihan_tampil_data'); 

        }

        function latihan_edit_data($id){
            $data = User::whereId($id)->first();
            return view('latihan_edit_data',compact(['data','id']));
        }

        function latihan_update_data($id,Request $request){
            $data = User::whereId($id)->first();
            $data->nama = $request->nama;
            $data->kelas = $request->kelas;
            $data->nis = $request->nis;
            $data->save();
            return redirect('/latihan_tampil_data');
        }


    
}
