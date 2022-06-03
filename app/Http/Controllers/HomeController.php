<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Daftar;


class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            # code...
            if (Auth::user()->usertype=='0') {
                # code...
                return view('user.home');
            }else{
                return view('admin.home');
            }
        } else {
            # code...
            return redirect()->back();
        }
        
    }

    public function index(){
        return view('user.home');
    }
    public function addDaftar(){
        return view('user.daftar');
    }

    public function upload(Request $request)
    {
        
        $data = new Daftar;
        $data->nama=$request->name;
        $data->nik=$request->nik;
        $data->lahir=$request->lahir;
        $data->jeniskelamin=$request->jeniskelamin;
        $data->email=$request->email;
        $data->alamat=$request->alamat;
        $data->provinsi=$request->testpro;
        $data->kota=$request->kota;
        $data->lokasi=$request->lokasi;
        $data->jenisvaksin=$request->jenisvaksin;
        if (Auth::id()) {
            $data->id=Auth::user()->id;
        } 
        
        $data->save();
        return redirect()->back()->with('message', 'Pendaftaran berhasil');

        
        
    }
}
