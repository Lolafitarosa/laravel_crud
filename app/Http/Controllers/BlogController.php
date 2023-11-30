<?php
namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;
class BlogController extends Controller
{
public function home(){
return view('home');
}
public function tentang(){
return view('tentang');
}
public function kontak(){
return view('kontak');
}

public function submitKontak(PostRequest $request){
   $nama = $request->input('nama');
   $email = $request->input('email');
   $message = $request->input('pesan');

   return redirect()->route('kontak.message')->with([
     'nama' => $nama,
     'email' => $email,
     'pesan' => $message,
    
   ]);  
}

public function showmessage(){
    if (session('nama') || session('email') || session('pesan')) {
        return view('tampil');
    }
    // Contoh pemanggilan rute dalam kontroller atau tampilan
return redirect()->route('kontak');


}
}