<?php

namespace App\Http\Controllers;

use App\Models\mhs;
use Illuminate\Http\Request;

class EvaluasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexeval(Request $request)
    {
        //
        // $sematik = mhs::paginate(20);
        $sematik = mhs::when($request->tahun != null, function ($q) use ($request){
            return $q->where('tahun', $request->tahun);
        })
        ->when($request->semester != null, function ($q) use ($request){
            return $q->where('semester', $request->semester);
        })
        ->where('ipk','<=',1.99)
        // ->where('','<=',1.99)
        ->paginate(100);

        $mhseval = mhs::where('ipk','<=',1.99)->count();
        $mhsno = mhs::where('ipk','>=',2.00)->count();
        $mhs = mhs::whereNotNull('nim')->count();

        // $tombol = true;
        return view('mahasiswa.evaluasi',compact('sematik','mhseval','mhsno','mhs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //


    }
    

    // konfirmasi
    public function konfirmasi(Request $request,  $id)
    {
        $data = mhs::find($id);

        // @if ($data->ipk) 
            # code...
            
            // @endif
        
            
        if ($data->ipk <= 1.99) {
            $data->status = 'evaluasi';
        }else {
            $data->status = 'Tidakevaluasi';
            
        }

            
            $data->save();
            
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeeval(Request $request)
    {
        //

        // echo"a";
        $validator = Validator::make($request->all(),[
            'nim'           => 'unique:mhs,nim',
            'nama'          => 'required',
            'tahun'         => 'required',
            'semester'      => 'required',
            'ipk'           => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();
        
        $data['nim'] = $request->nim;
        $data['nama'] = $request->nama;
        $data['tahun'] = $request->tahun;
        // $data['tahun_'] = $request->tahunajaran;
        $data['semester'] = $request->semester;
        $data['ipk'] = $request->ipk;

        mhs::create($data);

        return redirect()->route('indexeval');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function searchhasil(Request $request)
    {
            $query = $request->input('keyword');
            $sematik = mhs::where('nim','LIKE','%'.$query.'%')
            ->orWhere('nama','LIKE','%'.$query.'%')
            ->orWhere('tahun','LIKE','%'.$query.'%')
            // ->orWhere('status','LIKE','%'.$query.'%')
            ->orWhere('ipk','LIKE','%'.$query.'%')
            
            
            ->paginate(100);
            $mhseval = mhs::where('ipk','<=',1.99)->count();
        $mhsno = mhs::where('ipk','>=',2.00)->count();
            $mhs = mhs::whereNotNull('nim')->count();
             // $keyword = $request->keyword;

            return view('mahasiswa.hasil',compact('sematik','mhseval','mhsno','mhs'));

    }


    
}
