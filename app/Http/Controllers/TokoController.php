<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toko;
class TokoController extends Controller
{
    public function index(){
        $toko = Toko::all();
        return view('welcome',['toko'=>$toko]);
    }
    public function tambah(Request $request)
    {

        Toko::create([
    'id_barang' => $request ->id_barang,
    'nama_barang' => $request ->nama_barang,
    'harga' => $request ->harga,
    'stok' => $request ->stok
        ]);
        return redirect('/');
    }
    public function hapus($id)
    {
        $toko = Toko::find($id);
        $toko->delete();
        return redirect('/');
    }
    public function edit($id){
    $toko = Toko::find($id);
    return view('edit',['toko'=>$toko]);
    }
    public function editan( Request $request,$id){
        $toko = Toko::find($id);
        $toko->update([
    'id_barang' => $request ->id_barang,
    'nama_barang' => $request ->nama_barang,
    'harga' => $request ->harga,
    'stok' => $request ->stok
    ]);
    return redirect('/');
    }




































}
