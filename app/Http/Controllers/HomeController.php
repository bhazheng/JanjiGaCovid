<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
}
