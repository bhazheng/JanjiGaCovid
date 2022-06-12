<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\Vaksin;
use App\Models\LKesehatan;
use App\Models\Daftar;
use App\Models\profile;
use Illuminate\Database\Eloquent\Model;

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
    // public function index(){
    //     return view('user.home');
    // }
    public function addDaftar(){
        return view('user.daftar');
    }
    public function tampilfaq(){
        return view('user.faq');
    }
    public function tampilprofile(){
        $id = Auth::id(); 
        if (profile::find($id)) {
            $users = User::find(Auth::id());
            $profile = profile::find(Auth::id());
            return view('user.editprofile')
            ->with(compact('profile'))
            ->with(compact('users'));
            
            
        } else {
            $users = User::find(Auth::id());
            return view('user.profile')
            ->with(compact('users'));
        }
        $profile = profile::find(Auth::id());
    }
    public function updateprofile() {

        $users = User::find(Auth::id());
        $profile = profile::find(Auth::id());
        return view('user.editprofile')
        ->with(compact('profile'))
        ->with(compact('users'));
    }
    public function editprofile(Request $request, $id){
        $data = profile::find($id);
        $data->nama=$request->namaProfile;
        $data->nohp=$request->nohp;
        $data->nik=$request->nik;
        $data->jeniskelamin=$request->jeniskelamin;
        $data->alamat=$request->alamat;
        $data->umur=$request->umur;

        $data->save();
        return redirect()->back()->with('message', 'profile berhasil diupdate!');
    }
    public function upprofile(Request $request){
        $data = new profile;
        $data->nama=$request->namaprofile;
        $data->nohp=$request->nohp;
        $data->nik=$request->nik;
        $data->jeniskelamin=$request->jeniskelamin;
        $data->alamat=$request->alamat;
        $data->umur=$request->umur;
        if (Auth::id()) {
            $data->id=Auth::user()->id;
        } else {
            return redirect()->back()->with('message', 'Profile gagal');
        }
        $data->save();
        return redirect()->view('user.editprofile')->with('message', 'Profile berhasil');
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
