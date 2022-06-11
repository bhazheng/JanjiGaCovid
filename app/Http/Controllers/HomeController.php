<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\Vaksin;
use App\Models\LKesehatan;
use App\Models\Daftar;


class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            # code...
            if (Auth::user()->usertype=='0') {
                # code...
                $vaksins = vaksin::all();
                return view('user.home', compact('vaksins'));
            }else{
                $pendaftarSum = Daftar::count();
                $vaksinSum = vaksin::count();
                $lokasiSum = lkesehatan::count();
                $vaksins = vaksin::all();
                $lkesehatans = lkesehatan::all();
                $daftars = Daftar::all();
                return view('admin.home')
                ->with(compact('vaksins'))
                ->with(compact('lkesehatans'))
                ->with(compact('daftars'))
                ->with(compact('pendaftarSum'))
                ->with(compact('vaksinSum'))
                ->with(compact('lokasiSum'));
            }

        } else {
            # code...
            return redirect()->back();
        }
        
    }

    public function index() {

        if(Auth::id()) {
            return redirect('home');
        } else {
            $vaksins = vaksin::all();
            return view('user.home', compact('vaksins'));
        }
    }

    public function addDaftar(){
        return view('user.daftar');
    }
    public function tampilfaq(){
        return view('user.faq');
    }
    public function tampilprofile(){
        return view('user.profile');
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
        
        
        $data->save();
        return redirect()->back()->with('message', 'Pendaftaran berhasil');
    }
}
