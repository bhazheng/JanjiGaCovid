<?php

namespace App\Http\Controllers;

use App\Models\Vaksin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addview() {
        return view('admin.add_vaccine');
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

        return redirect()->back()->with('message', 'Vaksin berhasil ditambahkan');
    }
}
