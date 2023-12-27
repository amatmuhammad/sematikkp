<?php

namespace App\Http\Controllers;

use App\Models\mhs;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    //
    
    
    public function indexhasil(Request $request)
    {
        
        // $sematik = mhs::paginate(20);


         $sematik = mhs::when($request->tahun != null, function ($q) use ($request){
                return $q->where('tahun', $request->tahun);
            })
            ->when($request->semester != null, function ($q) use ($request){
                return $q->where('semester', $request->semester);
            })
            ->orderBy('tahun','asc')
            ->paginate(100);

            $mhseval = mhs::where('ipk','<=', 1.99)->count();
            $mhsno = mhs::where('ipk','>=', 2.00)->count();
            $mhs = mhs::whereNotNull('nim')->count();

        return view('mahasiswa.hasil',compact('sematik','mhseval','mhsno','mhs'));
    }
        // return view('mahasiswa.hasil',['sematik'=>$sematik]);
        // return redirect()->back()->with('success', 'Data berhasil dikonfirmasi.');
    // }

    // public function konfirmasi(Request $request, $id)
    // {
    //     // dd($request->all);
    //     // $sematik = mhs::get();
    //     // return view('mahasiswa.hasil',compact('sematik'));
    //     // return redirect()->back()->with('success', 'Data berhasil dikonfirmasi.');
    // }

    // public function konfirmasi(Request $request,  $id)
    // {
    //     $data = mhs::findOrFail($id);
    //     $data->status = 'Aktif';
    //     $data->save();

    //     return redirect()->back()->with('success', 'Data berhasil dikonfirmasi.');
    // }







}
