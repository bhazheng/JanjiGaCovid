<?php

namespace App\Http\Controllers;

use App\Models\Vaksin;
use App\Models\LKesehatan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addview() {
        return view('admin.add_vaccine');
    }

    public function addlokasi() {
        return view('admin.add_lkes');
    }

    public function upload(Request $request) {
        $vaksin = new Vaksin;
        
        $image = $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('vaccineimage', $imagename);
        $vaksin->image = $imagename;

        $vaksin->nama_vaksin = $request->vaccineName;
        $vaksin->deskripsi_vaksin = $request->vaccineDesc;

        $vaksin->save();

        return redirect()->back()->with('message', 'Vaksin berhasil ditambahkan!');
    }

    public function uploadLKes(Request $request) {
        $lokasi = new LKesehatan;

        $lokasi->layanan_kesehatan = $request->layananKesehatan;
        $lokasi->kecamatan = $request->kecamatan;
        $lokasi->kelurahan = $request->kelurahan;
        $lokasi->alamat = $request->alamat;

        $lokasi->save();

        return redirect()->back()->with('message', 'Layanan kesehatan berhasil ditambahkan!');
    }

    public function deleteVaksin($id) {
        $vaksin = vaksin::find($id);

        $vaksin->delete();

        return redirect()->back();
    }

    public function deleteLokasi($id) {
        $lokasi = LKesehatan::find($id);

        $lokasi->delete();

        return redirect()->back();
    }
}
