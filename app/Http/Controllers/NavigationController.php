<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function handleContactForm(Request $request)
{
    // Logika untuk menangani pengiriman formulir
}


    public function submit(Postrequest $request){
        return back()->with('success','Data Added Successfully.');
    }
}
