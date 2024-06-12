<?php

namespace App\Http\Controllers;

use App\_daftar_parfum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home()
    {
        return view("home", ["key" => "home"]);
    }

    public function _daftar_parfum()
    {
        $_daftar_parfum = _daftar_parfum::orderBy('id', 'desc')->get();
        return view("_daftar_parfum", ["key" => "_daftar_parfum", "parfum" => $_daftar_parfum]);
    }

    public function settings()
    {
        return view("settings", ["key" => "settings"]);
    }

    public function formaddparfum()
    {
        return view("form-add", ["key" => "_daftar_parfum"]);
    }

    public function saveparfum(Request $request)
    {
            $file_name = time().'-'.$request->file('poster')->getClientOriginalName();
            $path= $request->file('poster')->storeAs('poster',  $file_name, 'public');

            _daftar_parfum::create([
                'nama_parfum' => $request->nama_parfum,
                'jenis_parfum' => $request->jenis_parfum,
                'Aroma' => $request->Aroma,
                'harga' => $request->harga,
                'ukuran' => $request -> ukuran,
                'poster' => $path

            ]);
            return redirect('/_daftar_parfum')->with('alert', 'Data berhasil disimpan terimakasih!');


    }

    public function formeditparfum($id){
        $_daftar_parfum = _daftar_parfum::find($id);
        return view("form-edit", ["key" => "_daftar_parfum", "parfum" => $_daftar_parfum]);
    }

    public function updateparfum($id, Request $request){
        $_daftar_parfum = _daftar_parfum::find($id);
        $_daftar_parfum->nama_parfum = $request->nama_parfum;
        $_daftar_parfum->jenis_parfum = $request->jenis_parfum;
        $_daftar_parfum->Aroma = $request->Aroma;
        $_daftar_parfum->harga = $request->harga;
        $_daftar_parfum->ukuran = $request->ukuran;

        if($request->poster)
        {
            if ($_daftar_parfum ->poster)
            {
                Storage::disk('public/' . $_daftar_parfum->poster);
            }
            $file_name = time() . '-' . $request->file('poster')->getClientOriginalName();
            $path = $request->file('poster')->storeAs('poster', $file_name, 'public');
            $_daftar_parfum->poster = $path;
           
            
        }
        $_daftar_parfum->save();
        return redirect('/_daftar_parfum')->with('alert', 'Data berhasil di update');
     
        
        // return;
    }
    public function deleteparfum($id)
    {
        $_daftar_parfum = _daftar_parfum::find($id);
        if($_daftar_parfum->poster)
        {
            Storage::disk('public')->delete($_daftar_parfum->poster);
        }
        $_daftar_parfum->delete();
        return redirect('/_daftar_parfum')->with('alert', 'Data berhasil di hapus');
        
    }

    public function login()
    {
        return view("login");
    }

    public function formedituser()
    {
        return view("formedituser", ["key" => ""]);
    }

    public function updateuser(Request $request)
    {
        if($request->password_baru == $request->konfirmasi_password_baru)
        {

            $user = Auth::user();
            $user->password = bcrypt($request->password_baru);
            $user->save();
            return redirect('/user')->with('info', 'Data berhasil di update');
        }
        else
        {
            return redirect('/user')->with('info', 'Password gagal diubah');
        }
        
    }

}

 

