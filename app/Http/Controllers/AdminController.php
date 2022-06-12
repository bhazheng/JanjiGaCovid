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

    public function addpendaftar() {
        return view('admin.add_pendaftar');
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

    public function updateLokasi($id) {

        $lokasi = LKesehatan::find($id);
        return view('admin.update_lokasi', compact('lokasi'));
    }

    public function editLokasi(Request $request, $id) {

        $lokasi = LKesehatan::find($id);
        $lokasi->layanan_kesehatan = $request->layananKesehatan;
        $lokasi->kecamatan = $request->kecamatan;
        $lokasi->kelurahan = $request->kelurahan;
        $lokasi->alamat = $request->alamat;

        $lokasi->save();
        return redirect()->back()->with('message', 'Layanan kesehatan berhasil diupdate!');
    }

    public function updateVaksin($id) {

        $vaksin = vaksin::find($id);
        return view('admin.update_vaksin', compact('vaksin'));
    }

    public function editVaksin(Request $request, $id) {

        $vaksin = vaksin::find($id);
        $vaksin->nama_vaksin = $request->vaccineName;
        $vaksin->deskripsi_vaksin = $request->vaccineDesc;
        
        $image = $request->file;

        if($image) {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('vaccineimage', $imagename);
            $vaksin->image = $imagename;
        }

        $vaksin->save();
        return redirect()->back()->with('message', 'Vaksin berhasil diupdate!');
    }
}
