<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Vaksin;
use App\Models\LKesehatan;

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
                $vaksins = vaksin::all();
                $lkesehatans = lkesehatan::all();
                return view('admin.home', compact('vaksins'), compact('lkesehatans'));
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
}
