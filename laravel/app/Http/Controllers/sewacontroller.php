<?php

namespace App\Http\Controllers;

use App\Models\penyewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class sewacontroller extends Controller
{
        //select all
        public function index()
        {
            $penyewa = penyewa::all();
            return view ('penyewaan', ['listpenyewa' => $penyewa]);
        }
    
        //tambah
        public function tambah()
        {
            return view('penyewaan_tambah');
        }
    
        public function simpan(Request $request)
        {
            $penyewa = new penyewa;
    
            $penyewa -> nama_penyewa = $request -> nama_penyewa;
            $penyewa -> no_penyewa = $request -> no_penyewa;
            $penyewa -> alamat = $request -> alamat;
            $penyewa -> tanggal_penyewa = $request -> tanggal_penyewa;
            $penyewa -> tanggal_pengembalian = $request -> tanggal_pengembalian;
            $penyewa -> save();
    
            return redirect ('/index');
        }
    
        //edit
        public function edit(Request $request, $id)
        {
            $penyewa = penyewa::findOrFail($id);
            return view('penyewaan_edit', ['penyewa' => $penyewa]);
        }
    
        //update
        public function update(Request $request, $id)
        {
            $penyewa = penyewa::findOrFail($id);
            
            $penyewa -> nama_penyewa = $request -> nama_penyewa;
            $penyewa -> no_penyewa = $request -> no_penyewa;
            $penyewa -> alamat = $request -> alamat;
            $penyewa -> tanggal_penyewa = $request -> tanggal_penyewa;
            $penyewa -> tanggal_pengembalian = $request -> tanggal_pengembalian;
            $penyewa -> save();
    
            return redirect ('/penyewaan');
        }
    
        //delete
        public function delete($id)
        {
            $penyewa = penyewa::findOrFail($id);
            return view('penyewaan_delete', ['penyewa' => $penyewa]);
        }
    
        public function destroy($id)
        {
            $deletesiswa = DB::table('penyewa') -> where ('id', $id) -> delete();
    
            return redirect('/penyewaan');
        }
}
