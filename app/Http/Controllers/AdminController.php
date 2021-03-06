<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
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
        $lkesehatans = LKesehatan::all();

        return view('admin.add_pendaftar', compact('lkesehatans'));
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

    public function deletePendaftar($id) {
        $data = Daftar::find($id);

        $data->delete();

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

    public function updatePendaftar($id) {

        $data = Daftar::find($id);
        $lkesehatans = LKesehatan::all();
        return view('admin.update_pendaftar', compact('data'), compact('lkesehatans'));
    }

    public function editPendaftar(Request $request, $id) {

        $data = Daftar::find($id);
        
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
        return redirect()->back()->with('message', 'Data Pendaftar berhasil diupdate!');
    }
}
